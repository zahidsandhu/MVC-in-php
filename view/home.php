
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
      <h1>Page-> <?= $home_ary['title']?></h1>
    </div>
    
    <div class="col-sm-12">
      <h1><?= $home_ary['data']?></h1>

      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($get_user_data as $value){?>
      <tr>
        <td><?=$value['id'];?></td>
        <td><?=$value['name'];?></td>
        <td><?=$value['email'];?></td>
        <td><?=$value['age'];?></td>
      </tr>
    <?php } ?>

    </tbody>
  </table>
      
    </div>
  </div>
</div>
