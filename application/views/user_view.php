<div class="content-wrapper">
  <section class="content-header">
    <h1>
      User List
      <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">User</li>
    </ol>
  </section>
  <section class="content">
    <table class="table">
   
        <<tr>
            <th>ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Address</th>
        </tr>
    
  
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['first_name']; ?></td>
            <td><?php echo $user['last_name']; ?></td>
            <td><?php echo $user['phone_number']; ?></td>
            <td><?php echo $user['address']; ?></td>
        </tr>
        <?php endforeach; ?>
 
    </table>
  </section>
</div> 