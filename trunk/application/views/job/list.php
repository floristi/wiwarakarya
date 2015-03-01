<?php if($this->session->userdata('role') == 'ADMIN'): ?>

<a style="font-size:1.5em" href="<?php echo site_url('c_jobs/create'); ?>">+Create</a>

<br/>
<br/>

<?php foreach($jobs as $job): ?>

Name 				: <?php echo $job->name; ?> 				<br/>
Position 			: <?php echo $job->position; ?> 			<br/>
Position category 	: <?php echo $job->position_category; ?>	<br/>
Due date 			: <?php echo $job->due_date; ?>				<br/>
Major 				: <?php echo $job->major; ?> 				<br/>
Last Education		: <?php echo $job->last_education; ?> 		<br/>
Salary 				: <?php echo $job->salary; ?> 				<br/>
Terms and Conditions: <?php echo $job->tnc; ?> 					<br/>
Company				: <?php echo $job->company_name; ?>			<br/>
<a href="">Edit</a>
<br/>
<a href="">Delete</a>

<br/><br/>

<?php endforeach; ?>

<?php endif; ?>