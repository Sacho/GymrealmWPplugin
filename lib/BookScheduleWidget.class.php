<?php // ѣ
/**
 * Definition of the GymRealm_BookScheduleWidget class.
 * 
 * @author pavelsof
 * @package GymRealm
 * @since 0.0.1
 */


class GymRealm_BookScheduleWidget extends WP_Widget {
	
	
	/**
	 * Constructor.
	 * 
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct(
			'gymrealm_book_schedule_widget', 
			__('GymRealm Book Schedule', 'gymrealm'), 
			array('description' => __("Renders a schedule booking form.", 'gymrealm'))
		);
		
	}
	
	
	/**
	 * Renders the form used for changing the widget's options.
	 * 
	 * @param array The widget options.
	 * @return void
	 */
 	public function form($instance) {
		return;
	}
	
	
	/**
	 * Handles the update of the widget's options.
	 * 
	 * @param array The new options.
	 * @param array The old options.
	 * @return array The newest options.
	 */
	public function update($new_instance, $old_instance) {
		return $new_instance;
	}
	
	
	/**
	 * Renders the widget.
	 * 
	 * @param array The widget arguments.
	 * @param array The widget options (the database stuff).
	 * @return void
	 */
	public function widget($args, $instance) {
		
		global $current_user, $gymrealm_plugin;
		get_currentuserinfo();
		
		$gyms = $gymrealm_plugin->api->get_gyms();
		
		foreach($gyms as $gym) {
			$areas = $gymrealm_plugin->api->get_areas($gym);
		}
		
		echo $before_widget;
		
		?>
		<form action="" method="post">
		</form>
		<?php
		
		echo $after_widget;
		
	}
	
}

?>
