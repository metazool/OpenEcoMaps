<?php
$page_title = "contribute to the map";
include("includes/header.inc");
?>

<div id="contents">
  <div id="text">
  <h2>How to edit the maps</h2>

  <p>Now you've got the basics, let's learn how to use a relatively simple editor called Potlatch 2. We have customised this tool to focus specifically on the features this map uses.</p>

  <h3>Introductory video</h3>

  <p>
  If you like, this video will take you through the basics. It might help to watch the video first, then read through this page and have a go yourself.</p>

  <object width="640" height="385"><param name="movie" value="http://www.youtube.com/v/T7oiuq3KqmE?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/T7oiuq3KqmE?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385"></embed></object>

  <h3>Creating an OpenStreetMap account</h3>

  <p>
  <strong>First things first, you need to create an OpenStreetMap account</strong>. Head over to the <a href="https://www.openstreetmap.org/user/new">new account form</a> and set yourself up. When you're done, come back here.</p>

  <h3>The customised editor</h3>

  <p>
  Open <a href="/editor/">the editor using this link</a> in a new window, then come back here. You should see something like this:</p>

  <p><img src="images/editor_mainscreen.png" alt="Main screen of the customised Potlatch 2 editor"></p>

  <p>
  <strong>The main section shows the map</strong> with all of the features drawn on top of the background map as thin grey lines or little grey dots. In this customised editor, all the sustainability features show up as the icons or as more prominently drawn areas such as those allotments and the library.</p>

  <p>
  <strong>At the top you have general controls</strong> that let you change the background (e.g. to aerial photography or an old out-of-copyright map); change the map style (e.g. away from our custom style to the OpenStreetMap default); show up any GPS data you might have gathered; read the help pages; change your options; and save anything you've done.</p>

  <p>
  <strong>On the left you have the features</strong> that you can add and edit. If you've not got anything selected it shows "points of interest" you can drag and drop onto the map (but not areas, since you can't just drag and drop them on - you need to draw their shape). If you select a feature, it will show that feature's properties.</p>

  <h3>Getting around the map</h3>

  <p>
  These are some basic controls for Potlatch 2...</p>

  <p><img src="images/editor_howto_basic.png" alt="Basic working with the map"></p>

  <p>
  <strong>Have a go!</strong> Until you try to save your changes, you can't do any damage.</p>

  <p>
  <strong>If you select a feature</strong> you can view and edit its properties using the left panel.</p>

  <p><img src="images/editor_properties.png" alt="Viewing and editing a feature's properties"></p>

  <h3>Adding a feature</h3>

  <p>
  If you've gone out and surveyed your local area and found (let's say) there's a geothermal heat pump nearby, then fire up the editor. <strong>Do not copy from other maps</strong> unless they definitely aren't copyrighted! So no to Google maps, council maps, etc.</p>

  <p>
  <strong>To add a point of interest</strong> simply drag the icon from the left panel onto the map, and drop it in the right location. Then add in the relevant properties and you're done!</p>

  <p><img src="images/editor_adding_poi.png" alt="Viewing and editing a feature's properties"></p>

  <p>
  <strong>To add an area</strong> such as some allotments or a building, zoom right in so you can easily draw the shape then just start clicking! Make sure you draw the shape as one continuous line from the first node to the final click that closes the area.</p>

  <p><img src="images/editor_adding_area.png" alt="Adding an area"></p>

  <p>
  Once you've drawn the shape, click on the 'unknown' drop down in the left panel and choose the type of feature, then add in extra information like name, etc.</p>

  <p><img src="images/editor_adding_area2.png" alt="Adding an area's properties"></p>

  <p>
  If you are drawing a complicated shape it's sometimes easier to start with something very simple, then drag the nodes into their right positions. You can also add new nodes in the middle of a line by holding down the 'shift' key and clicking on the line.</p>

  <p>
  <strong>If you want to practice without worrying about mistakes, launch <a href="editor/practice.html">this practice editor</a></strong> that connects to a test server instead of the main OpenStreetMap server. You can mess about to your heart's delight without a worry!</p>

  <h2>When you're all done, save your changes</h2>

  <p>
  Click on the 'save' button at the top right to save your changes. If it's the first time you've used the editor, you will need to follow the instructions to authorise yourself with the OpenStreetMap web site.</p>



  </div>
</div>

<?php include("includes/footer.inc"); ?>