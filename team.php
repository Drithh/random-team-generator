<?php

$people = $_POST['person'];
$team = $_POST['team'];
shuffle($people);
for ($i = 0; $i < $team; $i++) {
  $teams[] = 'Team' . ($i + 1);
}

$team_id = 0;

for ($i = 0; $i < count($people); $i++) {
  $team_members[$teams[$team_id]][] = $people[$i];
  $team_id++;
  if ($team_id == count($teams)) {
    $team_id = 0;
    shuffle($teams);
  }
}
?>

<div class="py-6 border-secondary border-y border-opacity-50">
  <div class="font-PT font-medium text-3xl text-primary mb-14 text-center">
    Pembagian Tim
  </div>
  <div class=" grid grid-cols-2 gap-14 px-14">
    <?php foreach ($team_members as $team_member_name => $team_member) { ?>
      <div class="team w-full">
        <div class="team-name text-center font-bold font-lg font-Source border-y-secondary border-y border-opacity-50 py-3 text-primary">
          <?php echo $team_member_name; ?>
        </div>
        <?php foreach ($team_member as $member) { ?>
          <div class="team-member font-Source border-b-secondary border-b border-opacity-50 py-2 text-primary text-center overflow-hidden whitespace-nowrap text-ellipsis">
            <?php echo ucfirst(strtolower($member)); ?>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
  <div class="font-PT font-medium text-xl text-primary  mt-16 text-center">
      Waktu Pembuatan
    </div>
  <div class="text-primary font-Josefin font-medium tracking-wider text-base text-center">
    <?= date('l jS \of F Y h:i:s') ?>
    
  </div>
</div>