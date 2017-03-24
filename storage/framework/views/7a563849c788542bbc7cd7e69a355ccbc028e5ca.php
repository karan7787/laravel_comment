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
    		    	    
    		         	<?php echo e($comment->body); ?>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Button trigger modal -->
<button style="font-size: 16px; font-style: normal;" class="btn btn-link" data-toggle="modal" data-target="#myModal">
  reply
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Reply to Comment</h4>
      </div>


<form action="/posts/<?php echo e($post->id); ?>/comments" method="post"> 
      <div class="modal-body">
<!-- Content Start -->       

<?php echo e(csrf_field()); ?>

<div class="form-group">
  <textarea class="form-control" name="body" rows="5" id="body"></textarea>
</div>

 <!-- Content End -->      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

      </form>
    </div>
  </div>
</div>
<!-- Modal -->
                  
                  <ul class="list-group">
                                   
                         </ul>
                    
                  </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
           </div>
      </div>           
         <hr>

			<div class="card col-sm-8">
				<div class="card-block">
					<form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">
					<?php echo e(csrf_field()); ?>

						<div class="form-group">
						  <textarea name="body" placeholder="Enter Your Comment" style="min-height: 120px !important;" class="form-control"> 

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