<!doctype html>
<html>
  <head>
    <title>Events in Omaha</title>
    <link href='styles.css' media='screen' rel='stylesheet' type='text/css' />
  </head>
  
  <body>
    <div class="page">
      <h1>
        Events in Omaha
      </h1>
      
      <div class="right_heading">
        Hide and show calendars using the arrow in the upper right corner.
      </div>
      
      <?php
      
        function calParams($id, $color) {
          return "&amp;src=" . $id . "&amp;color=%23" . $color;
        }
        
        function googleIcalLink($name, $gcal_url, $class) {
          $url = 'webcal://www.google.com/calendar/ical/' . $gcal_url . '/public/basic.ics';
          return openIcalLink($name, $url, $class);
        }
        
        function openIcalLink($name, $url, $class) {
          return '<a href="' . $url . '" class="' . $class . '">' . $name . '</a>';
        }
        
        function linkCategoryHeading($name) {
          return '<h3>' . $name . '</h3>';
        }
        
      
        $tech   = "2952A3"; // blue
        $entr   = "528800"; // green
        $netw   = "856508"; // yellow
        $govt   = "B1440E"; // red
        $social = "42104A"; // purple
        
        $icalLinks = '';
        
        // TODO better name would be $iframe_url
        $url = "https://www.google.com/calendar/embed?"
              . "showTitle=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;ctz=America%2FChicago";
        
        

        //////////
        // Government
        $icalLinks .= linkCategoryHeading('Government Calendars');
        
        // omacal
        $gcal_url   = 'fsa985i0nrks4osgnm90m1p7oo%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Omacal Government Events', $gcal_url, 'govt');
        $url        .= calParams($gcal_url, $govt);



        //////////
        // Networking
        $icalLinks .= linkCategoryHeading('Networking Calendars');
        
        // omacal
        $gcal_url   = 'clu6re7tdjqglca3bsi9cdt0kg%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Omacal Networking Events', $gcal_url, 'netw');
        $url        .= calParams($gcal_url, $netw);
        

                
        //////////
        // Entrepreneurship
        $icalLinks .= linkCategoryHeading('Entrepreneurship Calendars');
        
        // omacal
        $gcal_url   = '3blq82185ju6a947aguithce4c%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Omacal Entrepreneurship Events', $gcal_url, 'entr');
        $url        .= calParams($gcal_url, $entr);



        //////////
        // Shared Interest
        $icalLinks .= linkCategoryHeading('Shared Interest Calendars');
        
        // omacal
        $gcal_url   = 'gaq6lm8nheklccmn06b79f8dkc%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Omacal Shared Interest Events', $gcal_url, 'social');
        $url        .= calParams($gcal_url, $social);
        
        // omahatrails.com calendar
        $icalLinks  .= openIcalLink('Omahatrails.com Calendar', 'webcal://omahatrails.com/index.php?view=calendar&catid=&vcal=1&option=com_simplecalendar', 'social');
        $url        .= calParams('2a5kghbrujv6u8jd29e252s0k2qbqs3o%40import.calendar.google.com', $social);

        // Omaha Photography Meetup Group
        $icalLinks  .= openIcalLink('Omaha Photography Meetup Group', 'webcal://www.meetup.com/Omaha-Photography-Meetup-Group/events/ical/Omaha+Photography+Meetup+Group/', 'social');
        $url        .= calParams('i2q91sjdtah4589ju532dph1j3ao3rgr%40import.calendar.google.com', $social);


        //////////
        // Technology
        $icalLinks .= linkCategoryHeading('Technology Calendars');
        
        // omacal
        $gcal_url   = 'v22jm0329jldotqilithl7k9ig%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Omacal Technology Events', $gcal_url, 'tech');
        $url        .= calParams($gcal_url, $tech);
        
        // OLUG
        $gcal_url   = '6obgndddg57ho25ks68uf3ndpo%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink("Omaha Linux Users' Group (OLUG.org) Calendar", $gcal_url, 'tech');
        $url        .= calParams($gcal_url, $tech);
        
        // 2600
        $gcal_url   = 'tge8dvk7uo66c1jb924dlm96rg%40group.calendar.google.com';
        $icalLinks  .= openIcalLink('Omaha2600.org Calendar', $gcal_url, 'tech');
        $url        .= calParams($gcal_url, $tech);
        
        // Joomla
        $icalLinks  .= openIcalLink('Omaha Joomla! Users Group Calendar', 'webcal://www.meetup.com/Omaha-Joomla-Users-Group/events/ical/Omaha+Joomla+Users+Group/', 'tech');
        $url        .= calParams('msha54tjkqh8o7qo4aar720imssk4e7k%40import.calendar.google.com', $tech);
        
        // Drupal
        $icalLinks  .= openIcalLink('Drupal Users and Developers of Nebraska Calendar', 'webcal://www.meetup.com/drupal-nebraska/events/ical/Nebraska+Drupalers/', 'tech');
        $url        .= calParams('kdl1klnov66e4v8j0lj1b8lfg7chmn51%40import.calendar.google.com', $tech);
        
        
      ?>
      
      <iframe src="<?= $url ?>" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
      
      <div class="ical-links">
        <h2>Calendar feed links</h2>
        <p>
          If you would like to use your own calendar program to track these events, subscribe using the links below.
        </p>
        <?= $icalLinks; ?>
      </div>
      
      <p>
        Omacal source code is on <a href="https://github.com/heller/omacal">github</a>. Help us improve!
      </p>
    </div>
  </body>
</html>