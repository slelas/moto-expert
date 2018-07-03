<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Gallery' clonable='1' dynamic_folders='1' gallery='1'>
    <cms:editable
        type="relation"
        name='motor_image'
        masterpage='motor.php'
        has='one'
        no_gui='1'
        label='-'
    />

    <cms:editable
      name="gg_image"
      label="Image"
      desc="Upload your main image here"
      show_preview='1'
      type="image"
   />
</cms:template>
<?php COUCH::invoke(); ?>