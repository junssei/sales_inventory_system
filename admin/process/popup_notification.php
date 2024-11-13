<?php if(isset($_SESSION['notification'])) {?>
<div class="popupnotification">
    <?php echo "<p>" . $_SESSION['notification'] . "</p>" ?>
</div>
<?php }?>