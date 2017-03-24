    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
         
          <?php if(Auth::check()): ?>
         
              <a class="blog-nav-item" href="#"><?php echo e(Auth::user()->name); ?></a>
         
          <?php endif; ?>
        
        </nav>
      
      </div>
    
   </div>