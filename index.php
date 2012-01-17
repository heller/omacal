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
        $gov    = "528800"; // green
        $biz    = "856508"; // yellow
        $shared = "42104A"; // purple
        
        $icalLinks = '';
        
        $iframe_url = "https://www.google.com/calendar/embed?"
              . "showTitle=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;ctz=America%2FChicago";
        
        

        //////////
        // Government / Public
        
        // omacal
        $gcal_url   = 'fsa985i0nrks4osgnm90m1p7oo%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Local Government Events (maintained by omacal)', $gcal_url, 'gov');
        $iframe_url .= calParams($gcal_url, $gov);
        
        // US Holidays
        $gcal_url   = 'en.usa%23holiday%40group.v.calendar.google.com';
        $icalLinks  .= googleIcalLink('US Holidays (according to Google)', $gcal_url, 'gov');
        $iframe_url .= calParams($gcal_url, $gov);


        //////////
        // Business
        $icalLinks .= linkCategoryHeading('');
        
        // omacal Networking
        $gcal_url   = 'clu6re7tdjqglca3bsi9cdt0kg%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Local Networking Events (maintained by omacal)', $gcal_url, 'biz');
        $iframe_url .= calParams($gcal_url, $biz);
        
        // Omaha Co-Founders Meetup
        $icalLinks  .= openIcalLink('Omaha Co-Founders Meetup Group', 'webcal://www.meetup.com/Omaha-Co-Founders-Meetup/events/ical/Omaha+Co-Founders+Meetup/', 'biz');
        $iframe_url .= calParams('5fratl1fqaffl3sk7546en1c7ipsbjl0%40import.calendar.google.com',$biz);

        //////////
        // Shared Interest
        $icalLinks .= linkCategoryHeading('');
        
        // omacal
        $gcal_url   = 'gaq6lm8nheklccmn06b79f8dkc%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Shared Interest Events (maintained by omacal)', $gcal_url, 'shared');
        $iframe_url .= calParams($gcal_url, $shared);
        
        // omahatrails.com calendar
        $icalLinks  .= openIcalLink('Omahatrails.com Calendar', 'webcal://omahatrails.com/index.php?view=calendar&catid=&vcal=1&option=com_simplecalendar', 'shared');
        $iframe_url .= calParams('2a5kghbrujv6u8jd29e252s0k2qbqs3o%40import.calendar.google.com', $shared);

        // Omaha Photography Meetup Group
        $icalLinks  .= openIcalLink('Omaha Photography Meetup Group', 'webcal://www.meetup.com/Omaha-Photography-Meetup-Group/events/ical/Omaha+Photography+Meetup+Group/', 'shared');
        $iframe_url .= calParams('i2q91sjdtah4589ju532dph1j3ao3rgr%40import.calendar.google.com', $shared);


        //////////
        // Technology
        $icalLinks .= linkCategoryHeading('');
        
        // omacal
        $gcal_url   = 'v22jm0329jldotqilithl7k9ig%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Technology Events (maintained by omacal)', $gcal_url, 'tech');
        $iframe_url .= calParams($gcal_url, $tech);
        
        // OLUG
        $gcal_url   = '6obgndddg57ho25ks68uf3ndpo%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink("Omaha Linux Users' Group (OLUG.org) Calendar", $gcal_url, 'tech');
        $iframe_url .= calParams($gcal_url, $tech);
        
        // 2600
        $gcal_url   = 'tge8dvk7uo66c1jb924dlm96rg%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Omaha2600.org Calendar', $gcal_url, 'tech');
        $iframe_url .= calParams($gcal_url, $tech);
        
        // Joomla
        $icalLinks  .= openIcalLink('Omaha Joomla! Users Group Calendar', 'webcal://www.meetup.com/Omaha-Joomla-Users-Group/events/ical/Omaha+Joomla+Users+Group/', 'tech');
        $iframe_url .= calParams('0oa420nbh7qhf2dcp59ihq7kkd1ev0j3%40import.calendar.google.com', $tech);
        
        // Drupal
        $icalLinks  .= openIcalLink('Drupal Users and Developers of Nebraska Calendar', 'webcal://www.meetup.com/drupal-nebraska/events/ical/Nebraska+Drupalers/', 'tech');
        $iframe_url .= calParams('kdl1klnov66e4v8j0lj1b8lfg7chmn51%40import.calendar.google.com', $tech);
        
        // Hacks and Hackers
        $icalLinks  .= openIcalLink('Hacks and Hackers of the Heartland', 'webcal://www.meetup.com/hackshackersheartland/events/ical/Hacks-Hackers+Heartland+%28Omaha%2C+NB%29/', 'tech');
        $iframe_url .= calParams('4jaarc32iviue3rhdg8h23bkai6kfuc4%40import.calendar.google.com', $tech);
        
        // OJUG
        $gcal_url   = 'qbgmdhgjdi5fidbbna5409ecm4%40group.calendar.google.com';
        $icalLinks  .= googleIcalLink('Omaha Java Users Group', $gcal_url, 'tech');
        $iframe_url .= calParams($gcal_url, $tech);
        
        // Omaha Cloud Computing Meetup
        $icalLinks  .= openIcalLink('Omaha Cloud Computing Group', 'webcal://www.meetup.com/OmaCloud/events/ical/Omaha+Cloud+Computing+Group/', 'tech');
        $iframe_url .= calParams('u3dm58dp42n2njp8jk86r73naump859o@import.calendar.google.com', $tech);
        
        // Omaha Mobile Group Meetup
        $icalLinks  .= openIcalLink('Omaha Mobile Group Meetup', 'webcal://www.meetup.com/Omaha-Mobile-Group/events/ical/Omaha+Mobile+Group/', 'tech');
        $iframe_url .= calParams('8bqlmmviidme2ftggilecec4nujr981q@import.calendar.google.com', $tech);
        
	// Omaha Front-end Web & jQuery
        $icalLinks  .= openIcalLink('Omaha Front-end Web & jQuery Meetup', 'webcal://www.meetup.com/jquery-omaha/events/ical/Omaha+Front-end+Web+%26+jQuery/', 'tech');
        $iframe_url .= calParams('oo37p31jclvk19mhkkf977mulkk60jbp@import.calendar.google.com', $tech);

	// Omaha Agile Development Meetup
        $icalLinks  .= openIcalLink('Omaha Agile Development Meetup', 'webcal://www.meetup.com/Omaha-Agile-Development/events/ical/Omaha+Agile+Development/', 'tech');
        $iframe_url .= calParams('2t4e67af832m8b29tr9st7a0fsilajjs@import.calendar.google.com', $tech);

        
      ?>
      
      <iframe src="<?= $iframe_url ?>" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
      
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
