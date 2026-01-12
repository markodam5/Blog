             
        </div><!-- end #sub-main -->

        <!-- MAKE THE LINKS: -->
          <?php  

            // Make the links to other pages, if necessary.
            if ($pages > 1) {

              // Add some spacing and start a paragraph:
              echo '<br><p id="links">';

              // Determine what page the script is on:
              // $current_page will have the value number 2
              $current_page = ($start/$display) + 1;

              // If it's not the first page, make a Previous link:
              if ($current_page != 1) {
                echo '<a href="?s=' . ($start - $display) . '&p=' . $pages . '">Previous</a> ';
              }

              // Make all the numbered pages:
              for ($i = 1; $i <= $pages; $i++) {
                if ($i != $current_page) {
                  echo '<a href="?s=' . (($display * ($i - 1))) . '&p=' . $pages . '">' . $i . '</a> ';
                } else {
                  echo $i . ' ';
                }
              } // End of FOR loop.

              // If it's not the last page, make a Next button:
              if ($current_page != $pages) {
                echo '<a href="?s=' . ($start + $display) . '&p=' . $pages . '">Next</a>';
              }

              echo '</p>'; // Close the paragraph.

            } // End of links section.

          ?>

      </div><!-- end #main -->       
  </div> <!-- End of sub-wrapper -->




		<div id="footer">
			<p>Copyright & Marko Damjanac</p>
	    </div><!-- #footer -->
	</div><!-- end #wrapper -->
    

  
</body>
</html>