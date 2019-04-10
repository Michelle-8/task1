function change_form_action( action_name )
{
    if( action_name=="countries" ) {
        document['visitors'].action = "<?php echo base_url() ?>countries/<?php echo $url_id ?>";
    }
    else if( action_name=="referers" ) {
        document['visitors'].action = "<?php echo base_url() ?>referers/<?php echo $url_id ?>";
    }
    else if( action_name=="browsers" ) {
        document['visitors'].action = "<?php echo base_url() ?>browsers/<?php echo $url_id ?>";
    }
	// document['search-theme-form'].action = 'test';
	document.getElementById('visitors').submit();
}