<?php use_stylesheet('jobs.css') ?>
<?php use_stylesheet('job.css') ?>

<?php /* ?>
<h1>Jobeet jobs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Position</th>
      <th>Location</th>
      <th>Description</th>
      <th>How to apply</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_jobs as $jobeet_job): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?id='.$jobeet_job->getId()) ?>"><?php echo $jobeet_job->getId() ?></a></td>
      <td><?php echo $jobeet_job->getCategoryId() ?></td>
      <td><?php echo $jobeet_job->getType() ?></td>
      <td><?php echo $jobeet_job->getCompany() ?></td>
      <td><?php echo $jobeet_job->getLogo() ?></td>
      <td><?php echo $jobeet_job->getUrl() ?></td>
      <td><?php echo $jobeet_job->getPosition() ?></td>
      <td><?php echo $jobeet_job->getLocation() ?></td>
      <td><?php echo $jobeet_job->getDescription() ?></td>
      <td><?php echo $jobeet_job->getHowToApply() ?></td>
      <td><?php echo $jobeet_job->getToken() ?></td>
      <td><?php echo $jobeet_job->getIsPublic() ?></td>
      <td><?php echo $jobeet_job->getIsActivated() ?></td>
      <td><?php echo $jobeet_job->getEmail() ?></td>
      <td><?php echo $jobeet_job->getExpiresAt() ?></td>
      <td><?php echo $jobeet_job->getCreatedAt() ?></td>
      <td><?php echo $jobeet_job->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>

  
  <?php */  ?>  
  
 
 <!-- apps/frontend/modules/job/templates/indexSuccess.php -->
<?php use_stylesheet('jobs.css') ?>
<div id="jobs">
 
	 <table class="jobs">
		<?php foreach ($jobeet_jobs as $i => $job): ?>
			<tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
				<td class="location"><?php echo $job->getLocation() ?></td>
				<td class="position">
				
					<?php /* ?><a href="<?php echo url_for('job/show?id='.$job->getId()) ?>">  <!-- This line is Commented
					 coz the below 2 lines replaced this (page 63).url_for() is a symfony helper --> <?php */ ?>
					 
					 
					<a href="<?php echo url_for('job/show?id='.$job->getId().'&company='.$job->getCompany().
								'&location='.$job->getLocation().'&position='.$job->getPosition())
					 ?>"> 
						<?php echo $job->getPosition() ?>
					</a>
				</td>
				<td class="company"><?php echo $job->getCompany() ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
 
 
 