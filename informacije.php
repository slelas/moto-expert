<?php require_once('couch/cms.php'); ?>
<cms:template title='Informacije' executable='0'>
    <cms:editable name='oib_tvrtke' label='OIB tvrtke' type='text'></cms:editable>
    <cms:editable name='mb_tvrtke' label='MB tvrtke' type='text'></cms:editable>
    <cms:editable name='ziro_racun' label='Žiro račun tvrtke' desc='npr. 2360000 – 1102192162 kod Zagrebačke banke d.d.' type='text'></cms:editable>
    <cms:editable name='broj_telefona' label='Broj telefona/kontakt broj tvrtke' type='text'></cms:editable>
    <cms:editable name='email_tvrtke' label='Mail za kontakt' type='text'></cms:editable>
    <cms:editable name='instagram_link' label='Link Instagram profila' type='text'></cms:editable>
    <cms:editable name='facebook_link' label='Link Facebook stranice' type='text'></cms:editable>
</cms:template>
<?php COUCH::invoke(); ?>