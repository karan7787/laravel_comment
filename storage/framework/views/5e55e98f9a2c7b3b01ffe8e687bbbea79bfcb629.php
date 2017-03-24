<?php $__env->startSection('content'); ?>

   <div class="col-sm-8 blog-main">

   	  <div class="blog-post">
           <h2 class="blog-post-title">  
                <?php echo e($post->title); ?></h2>

                 <?php if(count($post->tags)): ?>
                      <ul>
                 
                          <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                             <li>

                                  <a href="/posts/tags/<?php echo e($tag->name); ?>">

                               <?php echo e($tag->name); ?>

                                        </a>

                              </li>
                 
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
                        </ul>

                  <?php endif; ?>
       
                  <p class="blog-post-meta">   
                         <?php echo e($post->created_at->toFormattedDateString()); ?>

                                                                         </p>
                             <p>
                                  <?php echo e($post->body); ?>

                             </p>
           
                            <hr>
         </div>
          <div class="comment">
              <ul class="list-group">
              <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	  <li class="list-group-item"> 
    		           <strong>	
    		          	<?php echo e($comment->created_at->diffForHumans()); ?>:&nbsp; 

    		          </strong>
    		    	    
    		         	<?php echo e($comment->body); ?><a href="/reply/<?php echo e($comment->id); ?>">           reply</a>
                               <ul class="list-group">
                                    <?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="list-group-item"> 
                                              <p> <font size="3px" color="darkblue">  
                                                   <?php echo e($reply->created_at->diffForHumans()); ?>:&nbsp;                                           <?php echo e($reply->body); ?>


                                               </font>
                                          </p>

        
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </ul>
                    
                  </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
           </div>
      </div>           
         <hr>

			<div class="card">
				<div class="card-block">
					<form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">
					<?php echo e(csrf_field()); ?>

						<div class="form-group">
						  <textarea name="body" placeholder="Enter Your Comment" class="form-control"> 

						  </textarea>
						</div>

						<div class="form-group">
						<button type="submit" class="btn btn-primary "> Add Comment </button>
						</div>
            </form>
			</div>
      </div>
      <?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>