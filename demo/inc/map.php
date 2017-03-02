<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps JavaScript API Example</title>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjEhjSEi1nVyx1JdfubfIzxRhPCwpZVNxtYyowb5VEfwxU73ahRSxuJoxkEakGDex3DHyYSXcyG-TKg"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(37.4419, -122.1419), 13);
      }
    }

    //]]>
    </script>
  </head>
  <body onload="load()" onunload="GUnload()">
    <div id="map" style="width:500px;height:300px"></div>
	
<img  src="http://maps.google.com/staticmap?center=40.714728,-73.998672&zoom=14&size=512x512&maptype=mobile&markers=40.718217,-73.998284,redc&sensor=false&key=ABQIAAAAjEhjSEi1nVyx1JdfubfIzxRhPCwpZVNxtYyowb5VEfwxU73ahRSxuJoxkEakGDex3DHyYSXcyG-TKg&sensor=false">
  </body>
</html>

