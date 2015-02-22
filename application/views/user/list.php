<?php $this->load->view('layout/header'); ?>
<div class="container">
    <div class="main">
    	<h1>List Users</h1>
        <a style="font-size:2em;margin-bottom:20px" href="<?php echo site_url('c_user/create'); ?>">+create</a>
        <style>
            table {
                width: 100%;
                margin-top:20px;
            }
            table, th, td {
               border: 1px solid black;
            }
            thead td {
                font-weight: bold;
            }
            td {
                padding:10px;
            }
        </style>
    	<table>
    		<thead>
            <tr>
    			<td>No</td>
    			<td>Username</td>
    			<td>Password</td>
    			<td>Fullname</td>
    			<td>Last Education</td>
    			<td>PoB</td>
    			<td>DoB</td>
                <td>CV</td>
                <td>Action</td>
    		</tr>
            </thead>
    		<?php $i = 1; foreach($users as $user) : ?>
            <tr>
    			<td><?php echo $i; ?> </td>
    			<td><?php echo $user->username; ?> </td>
    			<td><?php echo $user->password; ?> </td>
    			<td><?php echo $user->name; ?> </td>
    			<td><?php echo $user->last_education; ?> </td>
    			<td><?php echo $user->pob; ?> </td>
    			<td><?php echo $user->dob; ?> </td>
                <td>
                    <?php if ($user->cv_path) : ?>
                        <a>download CV</a>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo site_url('c_user/update/'.$user->id); ?>">Edit</a>
                    <a href="<?php echo site_url('c_user/delete/'.$user->id); ?>" style="margin-left:10px">Delete</a></td>
            </tr>
    		<?php $i++; endforeach; ?>
    	</table>
    </div>
</div>
<?php $this->load->view('layout/footer'); ?>