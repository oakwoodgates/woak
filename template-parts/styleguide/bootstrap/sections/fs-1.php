<?php
?>

<?php
$a = array(
  'title' => 'Section Title',
  'desc'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt imperdiet massa. Aenean egestas neque sit amet ornare auctor.',
  'section' => array(
    '0' => array(
      'icon'  => 'bath',
      'price'  => '39.67',
      'title' => 'Responsive',
      'content'   => 'readable and usable.',
      'list'  => array(
        '0' => 'Cras justo odio',
        '1' => 'Dapibus ac facilisis in',
        '2' => '<del>Vestibulum at eros</del>',
        '3' => '&nbsp;',
        '4' => '&nbsp;',
      ),
    ),
    '1' => array(
      'icon'  => 'bicycle',
      'price'  => '82.67',
      'title' => 'Awesome Rides',
      'content'   => 'Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.',
      'list'  => array(
        '0' => 'Cras justo odio',
        '1' => 'Dapibus ac facilisis in',
        '2' => 'Vestibulum at eros',
//        '3' => '&nbsp;',
//        '4' => '&nbsp;',
      ),
    ),
    '2' => array(
      'icon'  => 'flask',
      'price'  => '154.67',
      'title' => 'Just Simple Science',
      'content'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.',
      'list'  => array(
        '0' => 'Cras justo odio',
        '1' => 'Dapibus ac facilisis in',
        '2' => 'Vestibulum at eros',
        '3' => 'Consectetur adipisicing elit',
        '4' => '<b>Nemo repellat fugiat excepturi</b>',
      ),
    ),
  ),
);
?>
<div class="container">
  <div class="row text-center">
    <?php $s = $a['section']; ?>
    <?php foreach ($s as $k => $v) : ?>
      <div class="col col-md-4">
        <span><i class="fa fa-3x fa-<?php echo $v['icon'] ?>" aria-hidden="true"></i></span>
        <h3 class="card-title"><?php echo $v['title'] ?></h3>
        <p class="card-text"><?php echo $v['content'] ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<hr class="ws" />

<div class="container">
  <div class="row text-center">
    <?php $s = $a['section']; ?>
    <?php foreach ($s as $k => $v) : ?>
      <div class="col col-md-4">
        <div class="card w-100">
          <div class="card-header">
            <i class="fa fa-3x fa-<?php echo $v['icon'] ?>" aria-hidden="true"></i>
          </div>
          <div class="card-body">
            <h3 class="card-title"><?php echo $v['title'] ?></h3>
            <p class="card-text"><?php echo $v['content'] ?></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<hr class="ws" />


<div class="container">
  <div class="row text-center">
    <?php $s = $a['section']; ?>
    <?php foreach ($s as $k => $v) : ?>
      <div class="col col-md-4 d-flex ">
        <div class="card w-100">
          <div class="card-header">
            <i class="fa fa-3x fa-<?php echo $v['icon'] ?>" aria-hidden="true"></i>
          </div>
          <div class="card-body">
            <h3 class="card-title"><?php echo $v['title'] ?></h3>
            <p class="card-text"><?php echo $v['content'] ?></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<hr class="ws" />

<div class="container">
  <div class="row text-center">
    <?php $s = $a['section']; ?>
    <?php foreach ($s as $k => $v) : ?>
      <div class="col col-md-4 d-flex ">
        <div class="card w-100 border-0">
          <div class="card-header border-0 bg-transparent">
            <i class="fa fa-3x fa-<?php echo $v['icon'] ?>" aria-hidden="true"></i>
          </div>
          <div class="card-body px-0">
            <h3 class="card-title"><?php echo $v['title'] ?></h3>
            <p class="card-text"><?php echo $v['content'] ?></p>
          </div>
          <div class="card-footer border-0 bg-transparent">
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<hr class="ws" />

<div class="container">
  <div class="row text-center">
    <?php $s = $a['section']; ?>
    <?php foreach ($s as $k => $v) : ?>
      <div class="col col-md-4 d-flex ">
        <div class="card w-100">
          <div class="card-header">
            <h3 class="card-title"><?php echo $v['title'] ?></h3>
          </div>
          <div class="card-body">
            <div class="display-4">$<?php echo $v['price'] ?></div>
            <div class="font-italic">per month</div>
          </div>
          <ul class="list-group list-group-flush text-left">
            <?php $l = $v['list']; ?>
            <?php foreach ($l as $lg => $lv ) : ?>
              <li class="list-group-item"><?php echo $lv; ?></li>
            <?php endforeach; ?>
          </ul>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<hr class="ws" />

<div class="container">
  <div class="row d-flex ">
    <?php $s = $a['section']; ?>
    <?php foreach ($s as $k => $v) : ?>
    <div class="col-lg-4 mb-4">
      <div class="card w-100">
        <h3 class="card-header"><?php echo $v['title'] ?></h3>
        <div class="card-body">
          <div class="display-4">$<?php echo $v['price'] ?></div>
          <div class="font-italic">per month</div>
        </div>
        <ul class="list-group list-group-flush text-left">
          <?php $l = $v['list']; ?>
          <?php foreach ($l as $lg => $lv ) : ?>
            <li class="list-group-item"><?php echo $lv; ?></li>
          <?php endforeach; ?>
          <li class="list-group-item"><a href="#" class="btn btn-primary">Go somewhere</a></li>
        </ul>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<hr class="ws" />
