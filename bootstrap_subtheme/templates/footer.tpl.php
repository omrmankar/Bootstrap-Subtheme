
<footer>
  <div class="footer-wrapper">
    <div class="container">
        <div class="row">
           <?php if (!empty($page['footer_first'])): ?>
             <div class="col-sm-3">   
                <?php print render($page['footer_first']); ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($page['footer_second'])): ?>
               <div class="col-sm-3">   
                <?php print render($page['footer_second']); ?> 
               </div>
            <?php endif; ?>
                   
            <?php if (!empty($page['footer_third'])): ?>
               <div class="col-sm-3">  
                  <?php print render($page['footer_third']); ?>
               </div>
            <?php endif; ?>

            <?php if (!empty($page['footer_fourth'])): ?>
               <div class="col-sm-3">   
                  <?php print render($page['footer_fourth']); ?>
               </div>
            <?php endif; ?>   
         </div>
    </div>
        <?php if (!empty($page['footer'])): ?>
		    <div class="bottom-footer">
		       <?php print render($page['footer']); ?>
		    </div> 
        <?php endif; ?>  
 </div>
</footer>