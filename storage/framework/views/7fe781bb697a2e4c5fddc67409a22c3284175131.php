            
    
            <div class="blog-post">
            <h2 class="blog-post-title">  
              <a href="/posts/<?php echo e($post->id); ?>">
              <?php echo e($post->title); ?>

              </a> 
            </h2>
             <p class="blog-post-meta">  

             <?php echo e($post->user->name); ?> on

             <?php echo e($post->created_at->toFormattedDateString()); ?>

             
             
            
            </p>
              
              <?php echo e($post->body); ?>

            
            
            
        </div><!-- /.blog-post -->

