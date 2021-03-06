# -*- coding: utf-8 -*-
#! /usr/bin/python

"""
extract_kml.py
Copyright 2010-11, Tom Chance <tom@acrewoods.net>

This script downloads data from OpenStreetMap related to
sustainable lifemyStyles and turns it into KML feeds.

This program is free software; you may redistribute it and/or
modify it under the terms of the GNU General Public License as
published by the Free Software Foundation; either version 3 of
the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
GNU General Public License for more details.

http://www.gnu.org/licenses/gpl-3.0.html
"""

import os
import sys
import MySQLdb
from ConfigParser import SafeConfigParser
from lib.kml_processing import *
from lib.feature_defs import *

__author__ = "Tom Chance"
__email__ = "tom@acrewoods.net"
__copyright__ = "Copyright 2010-11, Tom Chance"
__license__ = "GPL"

parser = SafeConfigParser()
parser.read('settings.cfg')
DBHOST = parser.get('database', 'host')
DBUSER = parser.get('database', 'user')
DBPASSWD = parser.get('database', 'passwd')
DBDB = parser.get('database', 'db')

bbox_london = '-0.51,51.20,0.35,51.80'
bbox_uk = '-6.5,49.68,2.67,61.31'

def createKML(bbox, features, myStyles):
  """
  Grab the raw data, process it and call the required feature_* functions
  to create the KML
  """
  output = ""
  features_list = features.split(';')
  for feature in features_list:
    function = "feature_%s" % (feature)
    this_output, myStyles = globals()[function](bbox, myStyles)
    output = ''.join([output, this_output])
  return output, myStyles

def createKMLFile(title, contents, filename, myStyles):
  """
  Sandwich the contents in a KML header and footer, and dump it into
  a file
  """
  header = generateKMLHeader(myStyles, title)
  output = ''.join([header, contents, "</Document></kml>"])
  f = open(filename, 'w')
  f.write(output)
  f.close()

def doTheJob(bbox, packtitle, filename, features, layername):
  if ('-v' in sys.argv):
    print ''.join([packtitle, " --> ", layername, " (", filename, ")"])
  feature_contents, myStyles = createKML(bbox, features, {})
  createKMLFile(packtitle, feature_contents, filename, myStyles)

if __name__=="__main__":
  db = MySQLdb.connect(host=DBHOST, user=DBUSER, passwd=DBPASSWD, db=DBDB)
  cursor = db.cursor()
  cursor.execute("SELECT packs.bbox, packs.title, layers.features, layers.name from packs, layers, pack_layers WHERE pack_layers.layer = layers.id AND pack_layers.pack = packs.id")
  layers = cursor.fetchall()
  for layer in layers:
    kml_filename = ''.join(["kml/", str.lower(layer[1].replace(" ", "_")), "/", str.lower(layer[3].replace(" ", "_")), ".kml"])
    try:
      doTheJob(layer[0], layer[1], kml_filename, layer[2], layer[3])
    except:
      if ('-v' in sys.argv):
        print "*** Blast, that layer failed. Moving on... ***"
