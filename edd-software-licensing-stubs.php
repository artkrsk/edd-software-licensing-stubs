<?php


namespace {
	// EDD Software Licensing constants
	if (!defined('EDD_SL_VERSION')) {
		define('EDD_SL_VERSION', '3.8.11');
	}
	if (!defined('EDD_SL_PLUGIN_FILE')) {
		define('EDD_SL_PLUGIN_FILE', __FILE__);
	}
	if (!defined('EDD_SL_PLUGIN_DIR')) {
		define('EDD_SL_PLUGIN_DIR', plugin_dir_path(EDD_SL_PLUGIN_FILE));
	}
	if (!defined('EDD_SL_PLUGIN_URL')) {
		define('EDD_SL_PLUGIN_URL', plugins_url('/', EDD_SL_PLUGIN_FILE));
	}
}
namespace {
    /**
     * Class EDD_SL_Requirements_Check
     *
     * @since 3.8
     */
    final class EDD_SL_Requirements_Check
    {
        /**
         * EDD_SL_Requirements_Check constructor.
         *
         * @param string $plugin_file
         */
        public function __construct($plugin_file)
        {
        }
        /**
         * Loads the plugin if requirements have been met, otherwise
         * displays "plugin not fully active" UI and exists.
         *
         * @since 3.8
         */
        public function maybe_load()
        {
        }
        /**
         * Adds CSS to the admin head for our "plugin not fully loaded" UI.
         *
         * @since 3.8
         */
        public function admin_head()
        {
        }
        /**
         * Displays a notice on the plugin row about missing requirements.
         *
         * @since 3.8
         */
        public function plugin_row_notice()
        {
        }
    }
    class EDD_Software_Licensing_Admin_Notices
    {
        /**
         * EDD_Software_Licensing_Admin_Notices constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initializes action hooks.
         */
        public function init()
        {
        }
        /**
         * Shows a notice if upcoming future requirements have not been met.
         *
         * @since 3.7.2
         */
        public function future_requirements()
        {
        }
        /**
         * Renders admin notices.
         */
        public function notices()
        {
        }
    }
    /**
     * EDD_SL_Bundle_License_Migration Class
     *
     * @since 3.6
     */
    class EDD_SL_Bundle_License_Migration extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions
         * @var string
         * @since 3.6
         */
        public $export_type = '';
        /**
         * Allows for a non-download batch processing to be run.
         * @since  3.6
         * @var boolean
         */
        public $is_void = \true;
        /**
         * Sets the number of items to pull on each step
         * @since  3.6
         * @var integer
         */
        public $per_step = 25;
        /**
         * Get the Export Data
         *
         * @access public
         * @since 3.6
         * @global object $wpdb Used to query the database using the WordPress
         *   Database API
         * @return array $data The data for the CSV file
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 3.6
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Set the properties specific to the payments export
         *
         * @since 3.6
         * @param array $request The Form Data passed into the batch processing
         */
        public function set_properties($request)
        {
        }
        /**
         * Process a step
         *
         * @since 3.6
         * @return bool
         */
        public function process_step()
        {
        }
        public function headers()
        {
        }
        /**
         * Perform the export
         *
         * @access public
         * @since 3.6
         * @return void
         */
        public function export()
        {
        }
        public function pre_fetch()
        {
        }
    }
    /**
     * EDD_SL_License_Export Class.
     *
     * @since 3.6 - Updated to use EDD_Batch_Export
     */
    class EDD_SL_License_Export extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters / actions
         *
         * @access      public
         * @var         string
         * @since       3.0
         */
        public $export_type = 'licenses';
        /**
         * The status we are exporting
         *
         * @access      public
         * @var         string
         * @since       3.0
         */
        public $status = 'active';
        /**
         * The Download we are exporting license keys for
         *
         * @access      public
         * @var         string
         * @since       3.0
         */
        public $download_id = 0;
        /**
         * Can we export?
         *
         * @access public
         * @since 3.0
         * @return bool Whether we can export or not
         */
        public function can_export()
        {
        }
        /**
         * Set the export headers
         *
         * @access public
         * @since 3.0
         * @return void
         */
        public function headers()
        {
        }
        /**
         * Set the CSV columns
         *
         * @access      public
         * @since       3.0
         * @return      array
         */
        public function csv_cols()
        {
        }
        /**
         * Get the data being exported
         *
         * @access public
         * @since 3.0
         * @since 3.6 - Updated to use EDD_Batch_Export
         *
         * @return mixed array|bool Logs if they exist, false otherwise.
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage.
         *
         * @access public
         * @since 3.6
         *
         * @return int Percentage complete based on current step.
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Define properties for the batch exporter.
         *
         * @access public
         * @since 3.6
         */
        public function set_properties($request)
        {
        }
    }
    /**
     * EDD_SL_License_Migration Class
     *
     * @since 3.6
     */
    class EDD_SL_License_Activation_Count_Fix extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions
         * @var string
         * @since 3.6
         */
        public $export_type = '';
        /**
         * Allows for a non-download batch processing to be run.
         * @since  3.6
         * @var boolean
         */
        public $is_void = \true;
        /**
         * Sets the number of items to pull on each step
         * @since  3.6
         * @var integer
         */
        public $per_step = 25;
        /**
         * Get the Export Data
         *
         * @access public
         * @since 3.6
         * @global object $wpdb Used to query the database using the WordPress
         *   Database API
         * @return bool  If we had items to process
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 3.6
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Set the properties specific to the payments export
         *
         * @since 3.6
         * @param array $request The Form Data passed into the batch processing
         */
        public function set_properties($request)
        {
        }
        /**
         * Process a step
         *
         * @since 3.6
         * @return bool
         */
        public function process_step()
        {
        }
        public function headers()
        {
        }
        /**
         * Perform the export
         *
         * @access public
         * @since 3.6
         * @return void
         */
        public function export()
        {
        }
        public function pre_fetch()
        {
        }
    }
    /**
     * EDD_SL_Remove_Legacy_Licenses Class
     *
     * @since 3.6
     */
    class EDD_SL_Remove_Legacy_Licenses extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions
         * @var string
         * @since 3.6
         */
        public $export_type = '';
        /**
         * Allows for a non-download batch processing to be run.
         * @since  3.6
         * @var boolean
         */
        public $is_void = \true;
        /**
         * Sets the number of items to pull on each step
         * @since  3.6
         * @var integer
         */
        public $per_step = 25;
        /**
         * Get the Export Data
         *
         * @access public
         * @since 3.6
         * @global object $wpdb Used to query the database using the WordPress
         *   Database API
         * @return array $data The data for the CSV file
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 3.6
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Set the properties specific to the payments export
         *
         * @since 3.6
         * @param array $request The Form Data passed into the batch processing
         */
        public function set_properties($request)
        {
        }
        /**
         * Process a step
         *
         * @since 3.6
         * @return bool
         */
        public function process_step()
        {
        }
        public function headers()
        {
        }
        /**
         * Perform the export
         *
         * @access public
         * @since 3.6
         * @return void
         */
        public function export()
        {
        }
        public function pre_fetch()
        {
        }
    }
    /**
     * EDD_SL_License_Log_Migration Class
     *
     * @since 3.6
     */
    class EDD_SL_License_Log_Migration extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions
         * @var string
         * @since 3.6
         */
        public $export_type = '';
        /**
         * Allows for a non-download batch processing to be run.
         * @since  3.6
         * @var boolean
         */
        public $is_void = \true;
        /**
         * Sets the number of items to pull on each step
         * @since  3.6
         * @var integer
         */
        public $per_step = 25;
        /**
         * Get the Export Data
         *
         * @access public
         * @since 3.6
         * @global object $wpdb Used to query the database using the WordPress
         *   Database API
         * @return array $data The data for the CSV file
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 3.6
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Set the properties specific to the payments export
         *
         * @since 3.6
         * @param array $request The Form Data passed into the batch processing
         */
        public function set_properties($request)
        {
        }
        /**
         * Process a step
         *
         * @since 3.6
         * @return bool
         */
        public function process_step()
        {
        }
        public function headers()
        {
        }
        /**
         * Perform the export
         *
         * @access public
         * @since 3.6
         * @return void
         */
        public function export()
        {
        }
        public function pre_fetch()
        {
        }
    }
    /**
     * EDD_SL_License_Migration Class
     *
     * @since 3.6
     */
    class EDD_SL_License_Migration extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions
         * @var string
         * @since 3.6
         */
        public $export_type = '';
        /**
         * Allows for a non-download batch processing to be run.
         * @since  3.6
         * @var boolean
         */
        public $is_void = \true;
        /**
         * Sets the number of items to pull on each step
         * @since  3.6
         * @var integer
         */
        public $per_step = 25;
        /**
         * Get the Export Data
         *
         * @access public
         * @since 3.6
         * @global object $wpdb Used to query the database using the WordPress
         *   Database API
         * @return array $data The data for the CSV file
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 3.6
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Set the properties specific to the payments export
         *
         * @since 3.6
         * @param array $request The Form Data passed into the batch processing
         */
        public function set_properties($request)
        {
        }
        /**
         * Process a step
         *
         * @since 3.6
         * @return bool
         */
        public function process_step()
        {
        }
        public function headers()
        {
        }
        /**
         * Perform the export
         *
         * @access public
         * @since 3.6
         * @return void
         */
        public function export()
        {
        }
        public function pre_fetch()
        {
        }
    }
    class EDD_SL_List_Table extends \WP_List_Table
    {
        function __construct()
        {
        }
        /**
         * Output column data
         *
         * @access      private
         * @since       1.0
         * @return      void
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Output the title column
         *
         * @access      private
         * @since       1.0
         * @return      void
         */
        public function column_title($item)
        {
        }
        /**
         * Output the checkbox column
         *
         * @access      private
         * @since       1.0
         * @return      void
         */
        public function column_cb($item)
        {
        }
        /**
         * Setup columns
         *
         * @access      public
         * @since       1.0
         * @return      array
         */
        public function get_columns()
        {
        }
        /**
         * Retrieve the table's sortable columns
         *
         * @access public
         * @since 2.1.2
         * @return array Array of all the sortable columns
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Setup available views
         *
         * @access      private
         * @since       1.0
         * @return      array
         */
        function get_views()
        {
        }
        /**
         * Retrieve the current page number
         *
         * @access      private
         * @since       1.3.4
         * @return      int
         */
        function get_paged()
        {
        }
        /**
         * Retrieve the total number of licenses
         *
         * @access      private
         * @since       1.3.4
         * @return      int
         */
        function get_total_licenses()
        {
        }
        /**
         * Setup available bulk actions
         *
         * @access      private
         * @since       1.0
         * @return      array
         */
        function get_bulk_actions()
        {
        }
        /**
         * Process bulk actions
         *
         * @access      private
         * @since       1.0
         * @return      void
         */
        function process_bulk_action()
        {
        }
        /** ************************************************************************
         * @uses $this->_column_headers
         * @uses $this->items
         * @uses $this->get_columns()
         * @uses $this->get_sortable_columns()
         * @uses $this->get_pagenum()
         * @uses $this->set_pagination_args()
         **************************************************************************/
        function prepare_items()
        {
        }
        /**
         * Updates the primary column to the license key.
         *
         * @return string
         * @since 3.7
         */
        public function get_primary_column_name()
        {
        }
    }
    class EDD_SL_Renewal_Notice_Logs extends \WP_List_Table
    {
        function __construct()
        {
        }
        /**
         * Setup columns
         *
         * @access      public
         * @since       3.0
         * @return      array
         */
        function get_columns()
        {
        }
        /**
         * Output the checkbox column
         *
         * @access      public
         * @since       3.0
         * @return      void
         */
        function column_cb($item)
        {
        }
        /**
         * Output the recipient column
         *
         * @access      public
         * @since       3.0
         * @return      void
         */
        function column_recipient($item)
        {
        }
        /**
         * Output the subject column
         *
         * @access      public
         * @since       3.0
         * @return      void
         */
        function column_subject($item)
        {
        }
        /**
         * Output the date column
         *
         * @access      public
         * @since       3.0
         * @return      void
         */
        function column_date($item)
        {
        }
        /**
         * Retrieve the current page number
         *
         * @access      public
         * @since       3.0
         * @return      int
         */
        function get_paged()
        {
        }
        /**
         * Outputs the log views
         *
         * @access public
         * @since  3.0
         * @return void
         */
        function bulk_actions($which = '')
        {
        }
        /**
         * Retrieve the current page number
         *
         * @access      public
         * @since       3.0
         * @return      int
         */
        function count_total_items()
        {
        }
        /**
         * Query database for license data and prepare it for the table
         *
         * @access      public
         * @since       3.0
         * @return      array
         */
        function logs_data()
        {
        }
        /**
         * Sets up the list table items
         *
         * @access      public
         * @since       3.0
         * @return      void
         */
        function prepare_items()
        {
        }
    }
    /*
     * This class handles generating license keys for purchases made before Software Licensing was activated
     */
    class EDD_SL_Retroactive_Licensing
    {
        /**
         * Setup actions
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function __construct()
        {
        }
        /**
         * Render the admin UI under Downloads > Tools
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function tool_box()
        {
        }
        /**
         * Display the license generation status
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function show_status($count, $posts, $download_id)
        {
        }
        /**
         * Retrieve all downloads that have licensing enabled
         *
         * @access      public
         * @since       2.4
         * @return      array
         */
        public static function get_licensed_products()
        {
        }
        /**
         * Get all payments that are missing license keys
         *
         * @access      public
         * @since       2.4
         * @return      array
         */
        public static function get_unlicensed_payments()
        {
        }
        /**
         * Process an ajax post to generate keys for a license
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function edd_sl_process_retroactive_post()
        {
        }
        /**
         * Generate the license keys for a payment during an ajax post
         *
         * @param int $payment_id         The payment/order ID.
         * @param int $download_id        The download ID.
         * @param boolean|object $payment The payment object, if it is known.
         *
         * @access      public
         * @since       2.4
         * @return      mixed
         */
        public static function generate_license_keys($payment_id, $download_id, $payment = \false)
        {
        }
        /**
         * Load necessary scripts
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public static function scripts($hook)
        {
        }
        /**
         * Retrieve payment details screen URL
         *
         * @access      public
         * @since       2.4
         * @return      string
         */
        public static function get_order_url($payment_id)
        {
        }
    }
}
namespace WordPressdotorg\Plugin_Directory\Readme {
    /**
     * WordPress.org Plugin Readme Parser.
     *
     * Based on Baikonur_ReadmeParser from https://github.com/rmccue/WordPress-Readme-Parser
     *
     * @package WordPressdotorg\Plugin_Directory\Readme
     */
    class Parser
    {
        /**
         * @var string
         */
        public $name = '';
        /**
         * @var array
         */
        public $tags = array();
        /**
         * @var string
         */
        public $requires = '';
        /**
         * @var string
         */
        public $tested = '';
        /**
         * @var string
         */
        public $requires_php = '';
        /**
         * @var array
         */
        public $contributors = array();
        /**
         * @var string
         */
        public $stable_tag = '';
        /**
         * @var string
         */
        public $donate_link = '';
        /**
         * @var string
         */
        public $short_description = '';
        /**
         * @var string
         */
        public $license = '';
        /**
         * @var string
         */
        public $license_uri = '';
        /**
         * @var array
         */
        public $sections = array();
        /**
         * @var array
         */
        public $upgrade_notice = array();
        /**
         * @var array
         */
        public $screenshots = array();
        /**
         * @var array
         */
        public $faq = array();
        /**
         * Warning flags which indicate specific parsing failures have occured.
         *
         * @var array
         */
        public $warnings = array();
        /**
         * Parser constructor.
         *
         * @param string $file
         */
        public function __construct($file)
        {
        }
        /**
         * @param string $file
         * @return bool
         */
        protected function parse_readme($file)
        {
        }
        /**
         * @access protected
         *
         * @param string $contents
         * @return string
         */
        protected function get_first_nonwhitespace(&$contents)
        {
        }
        /**
         * @access protected
         *
         * @param string $line
         * @return string
         */
        protected function strip_newlines($line)
        {
        }
        /**
         * @access protected
         *
         * @param string $desc
         * @param int    $length
         * @return string
         */
        protected function trim_length($desc, $length = 150)
        {
        }
        /**
         * @access protected
         *
         * @param string $text
         * @return string
         */
        protected function filter_text($text)
        {
        }
        /**
         * @access protected
         *
         * @param string $text
         * @return string
         */
        protected function sanitize_text($text)
        {
        }
        /**
         * Sanitize provided contributors to valid WordPress users
         *
         * @param array $users Array of user_login's or user_nicename's.
         * @return array Array of user_logins.
         */
        protected function sanitize_contributors($users)
        {
        }
        /**
         * Sanitize the provided stable tag to something we expect.
         *
         * @param string $stable_tag the raw Stable Tag line from the readme.
         * @return string The sanitized $stable_tag.
         */
        protected function sanitize_stable_tag($stable_tag)
        {
        }
        /**
         * Sanitizes the Requires PHP header to ensure that it's a valid version header.
         *
         * @param string $version
         * @return string The sanitized $version
         */
        protected function sanitize_requires_php($version)
        {
        }
        /**
         * Sanitizes the Tested header to ensure that it's a valid version header.
         *
         * @param string $version
         * @return string The sanitized $version
         */
        protected function sanitize_tested_version($version)
        {
        }
        /**
         * Sanitizes the Requires at least header to ensure that it's a valid version header.
         *
         * @param string $version
         * @return string The sanitized $version
         */
        protected function sanitize_requires_version($version)
        {
        }
        /**
         * Parses a slice of lines from the file into an array of Heading => Content.
         *
         * We assume that every heading encountered is a new item, and not a sub heading.
         * We support headings which are either `= Heading`, `# Heading` or `** Heading`.
         *
         * @param string|array $lines The lines of the section to parse.
         * @return array
         */
        protected function parse_section($lines)
        {
        }
        /**
         * @param string $text
         * @return string
         */
        protected function parse_markdown($text)
        {
        }
        /**
         * Determine if the readme contains unique installation instructions.
         *
         * When phrases are added here, the affected plugins will need to be reparsed to pick it up.
         *
         * @return bool Whether the instructions differ from default instructions.
         */
        protected function has_unique_installation_instructions()
        {
        }
    }
}
namespace {
    /**
     * Main Software Licensing Class
     *
     * @package   edd-software-licensing
     * @copyright Copyright (c) 2021, Sandhills Development, LLC
     * @license   GPL2+
     */
    class EDD_Software_Licensing
    {
        /**
         * @var EDD_SL_License_DB
         * @since 3.6
         */
        public $licenses_db;
        /**
         * @var EDD_SL_License_Meta_DB
         * @since 3.6
         */
        public $license_meta_db;
        /**
         * @var EDD_SL_Activations_DB
         * @since 3.6
         */
        public $activations_db;
        /**
         * @var EDD_SL_Roles
         * @since 3.6
         */
        public $roles;
        /**
         * @const FILE
         */
        const FILE = \EDD_SL_PLUGIN_FILE;
        /**
         * Main EDD_Software_Licensing Instance
         *
         * Insures that only one instance of EDD_Software_Licensing exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         *
         * @since     1.4
         * @static
         * @staticvar array $instance
         */
        public static function instance()
        {
        }
        public function actions()
        {
        }
        /**
         * Load the localization files
         *
         * @since  3.2.4
         * @return void
         */
        public function localization()
        {
        }
        /**
         * Load API endpoint.
         *
         * @return void
         */
        public function load_api_endpoint()
        {
        }
        /**
         * Retrieve a EDD_SL_License object by ID or key
         *
         * @since  3.5
         * @since  3.8.7 When using an ID, if a valid license is not found, return false.
         * @param  $id_or_key string|int License key or license ID
         * @param  $by_key    bool       True if retrieving with a key instead of ID
         * @return EDD_SL_License|bool  License object if found. False if not found.
         */
        public function get_license($id_or_key, $by_key = \false)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | License Creation
        |--------------------------------------------------------------------------
        */
        /**
         * Generate license keys for a purchase
         *
         * Generates ( if needed ) a license key for the buyer at time of purchase
         * This key will be used to activate all products for this purchase
         *
         * @access      public
         * @since       1.5
         * @uses EDD_Software_Licensing::generate_new_license
         *
         * @param int     $download_id The download ID for the license.
         * @param int     $payment_id  The associated payment ID.
         * @param string  $type        The type of product (default/bundle).
         * @param array   $cart_item   The information about the item in the cart.
         * @param mixed   $cart_index  The position of the item in the cart.
         *
         * @return      mixed
         */
        public function generate_license($download_id = 0, $payment_id = 0, $type = 'default', $cart_item = array(), $cart_index = 0)
        {
        }
        /**
         * Generates a new license.
         *
         * @since 3.7
         *
         * @param array  $args {
         *     @type int     $download_id The download ID for the license.
         *     @type int     $payment_id  The associated payment ID.
         *     @type string  $type        The type of product (default/bundle).
         *     @type array   $cart_item   The information about the item in the cart.
         *     @type mixed   $cart_index  The position of the item in the cart.
         *     @type boolean $retroactive Whether the license is being generated retroactively (default false).
         *                                If true, licenses will be generated for upgrade payment, rather than the original.
         * }
         * @return array       An array of newly generated license keys.
         */
        public function generate_new_license($args = array())
        {
        }
        /*
        |--------------------------------------------------------------------------
        | License Activation
        |--------------------------------------------------------------------------
        */
        /**
         * @param array $args
         *
         * @return array
         */
        function activate_license($args)
        {
        }
        /**
         * @param array $data
         * @return void
         */
        public function remote_license_activation($data)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | License Deactivation
        |--------------------------------------------------------------------------
        */
        /**
         * @param array $args
         *
         * @return bool
         */
        function deactivate_license($args)
        {
        }
        /**
         * @param array $data
         * @return void
         */
        public function remote_license_deactivation($data)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | License Checking
        |--------------------------------------------------------------------------
        */
        /**
         * @param array $args
         *
         * @return string
         */
        function check_license($args)
        {
        }
        /**
         * @param array $data
         * @return array|void
         */
        function remote_license_check($data)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | License Renewal
        |--------------------------------------------------------------------------
        */
        /**
         * @param int    $download_id
         * @param int    $payment_id
         * @param string $type (unused)
         * @param array  $cart_item
         * @return void
         */
        function process_renewal($download_id = 0, $payment_id = 0, $type = 'default', $cart_item = array())
        {
        }
        /**
         * @param int $license_id
         * @param int $payment_id
         * @param int $download_id
         * @return void
         */
        function renew_license($license_id = 0, $payment_id = 0, $download_id = 0)
        {
        }
        /**
         * Retrieve the renewal URL for a license key
         *
         * @since  3.4
         * @param int $license_id
         * @return string The renewal URL
         */
        function get_renewal_url($license_id = 0)
        {
        }
        /**
         * Determine if a license is allowed to be extended
         *
         * @since  3.4.7
         * @param int $license_id
         * @return bool
         */
        public function can_extend($license_id = 0)
        {
        }
        /**
         * Determine if a license is allowed to be renewed after it's expiration
         *
         * @since  3.5.4
         * @param int $license_id
         * @return bool
         */
        public function can_renew($license_id = 0)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Revoke License
        |--------------------------------------------------------------------------
        */
        /**
         * Revokes a license key when the order item status indicates that it should be.
         * Hooked into the Berlin transition hook on the order item status.
         *
         * @param string $old_status
         * @param string $new_status
         * @param int $order_item_id
         * @return void
         */
        public function revoke($old_status, $new_status, $order_item_id)
        {
        }
        /**
         * Revokes a license when the payment status changes (EDD 2.x).
         *
         * @todo Deprecate when EDD minimum is 3.x.
         * @param int $payment_id
         * @param string $new_status
         * @param string $old_status
         */
        public function revoke_license($payment_id, $new_status, $old_status)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Delete License
        |--------------------------------------------------------------------------
        */
        /**
         * @param int $payment_id
         * @param int $download_id
         * @return void
         */
        function delete_license($payment_id, $download_id = 0)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Version Checking
        |--------------------------------------------------------------------------
        */
        /**
         * @param int $item_id
         *
         * @return bool|mixed
         */
        function get_latest_version($item_id)
        {
        }
        /**
         * Process both single and multiple licence checks.
         *
         * @param array $data The information of the item to check.
         * @return array|void
         */
        public function get_latest_version_remote($data)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Logging Functions
        |--------------------------------------------------------------------------
        */
        /**
         * @param string $license_id
         *
         * @return array|bool
         */
        function get_license_logs($license_id = '')
        {
        }
        /**
         * @param int $license_id
         * @param array $server_data
         */
        function log_license_activation($license_id, $server_data)
        {
        }
        /**
         * @param int $license_id
         * @param array $server_data
         */
        function log_license_deactivation($license_id, $server_data)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Site tracking
        |--------------------------------------------------------------------------
        */
        /**
         * @param int $license_id
         *
         * @return array
         */
        function get_sites($license_id = 0)
        {
        }
        /**
         * @param int $license_id
         *
         * @return mixed|void
         */
        public function get_site_count($license_id = 0)
        {
        }
        /**
         * @param int    $license_id
         * @param string $site_url
         *
         * @return bool|mixed|void
         */
        function is_site_active($license_id = 0, $site_url = '')
        {
        }
        /**
         * @param int    $license_id
         * @param string $site_url
         *
         * @return bool|int
         */
        function insert_site($license_id = 0, $site_url = '')
        {
        }
        /**
         * @param int    $license_id
         * @param string $site_url
         *
         * @return bool|int
         */
        function delete_site($license_id = 0, $site_url = '')
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Misc Functions
        |--------------------------------------------------------------------------
        */
        /**
         * @param int $download_id
         *
         * @return mixed
         */
        function get_new_download_license_key($download_id = 0)
        {
        }
        /**
         * Generate a license key.
         *
         * @param int $license_id
         * @param int $download_id
         * @param int $payment_id
         * @param mixed $cart_index
         * @param int   $timestamp  A numeric timestamp in order to attempt to 'salt' keys so they can be regenerated.
         *
         * @return string
         */
        function generate_license_key($license_id = 0, $download_id = 0, $payment_id = 0, $cart_index = 0, $timestamp = 0)
        {
        }
        /**
         * @param string $license_key
         *
         * @return bool|null|string
         */
        function get_license_by_key($license_key)
        {
        }
        /**
         * @param int $license_id
         *
         * @return bool|mixed
         */
        function get_license_key($license_id)
        {
        }
        /**
         * @param string $license_key
         *
         * @return mixed|void
         */
        function get_download_id_by_license($license_key)
        {
        }
        /**
         * @param string $license_key
         * @deprecated 3.4.7
         *
         * @return mixed|void
         */
        function get_download_by_license($license_key)
        {
        }
        /**
         * Retrieves the download ID by the name.
         *
         * @param  string  $name Download name
         * @since  3.4.4
         * @return int     Download ID
         */
        public function get_download_id_by_name($name = '')
        {
        }
        /**
         * Check if the license key is attributed to the download id given.
         * Constant EDD_BYPASS_ITEM_ID_CHECK can bypass this check if true.
         *
         * @param  integer $download_id Download/Item ID (post_id)
         * @param  string  $license_key License key
         * @param  bool    $bypass_constant Allows a way to bypass the constant for cases outside of the download process
         * @return bool               true/false
         */
        function is_download_id_valid_for_license($download_id = 0, $license_key = '', $bypass_constant = \false)
        {
        }
        /**
         * Returns the name of the download ID
         *
         * @param int $license_id
         * @since 3.4
         * @return int
         */
        function get_download_name($license_id = 0)
        {
        }
        /**
         * Gets the download name for display with a license key.
         * Prepends name for child licenses with --
         * Appends the variation name if applicable.
         *
         * @param object \EDD_SL_License $license
         * @return string
         */
        public function get_license_download_display_name($license)
        {
        }
        /**
         * Returns the download ID of a license key
         * @since 2.7
         * @param int $license_id
         * @return int
         */
        function get_download_id($license_id = 0)
        {
        }
        /**
         * Returns the user ID (if any) the license belongs to, if none is found in post meta
         * it retrieves it from the payment and populates the post meta
         *
         * @access public
         * @since  3.4.8
         * @param  int $license_id
         * @return int
         */
        public function get_user_id($license_id = 0)
        {
        }
        /**
         * Returns the price ID for a license key
         *
         * @since 3.3.
         * @param int $license_id
         *
         * @return int
         */
        function get_price_id($license_id = 0)
        {
        }
        /**
         * Returns the payment ID of a license key
         *
         * @since 3.4
         * @param int $license_id
         * @return int
         */
        function get_payment_id($license_id = 0)
        {
        }
        /**
         * @param int $payment_id
         *
         * @return EDD_SL_License[]|bool
         */
        public function get_licenses_of_purchase($payment_id)
        {
        }
        /**
         * @param int  $purchase_id
         * @param int  $download_id
         * @param mixed $cart_index
         * @param bool $allow_children If we should return child licenses if found on the payment containing a bundle
         *
         * @return EDD_SL_License|bool Returns license, if found. If not, returns false
         */
        function get_license_by_purchase($purchase_id = 0, $download_id = 0, $cart_index = \false, $allow_children = \true)
        {
        }
        /**
         * Retrieve all license keys for a user
         *
         * @param int  $user_id The user ID to get licenses for
         * @param bool $include_child_licenses If true (default) we will get all licenses including children of a bundle
         *                                     when false, the method will only return licenses without a parent
         *
         * @since 3.4
         * @param  $user_id     int The ID of the user to filter by
         * @param  $download_id int The ID of a download to filter by
         * @param  $status      string The license status to filter by, or all
         * @return array
         */
        function get_license_keys_of_user($user_id = 0, $download_id = 0, $status = 'any', $include_child_licenses = \true)
        {
        }
        /**
         * Given a license ID, return any child licenses it may have
         *
         * @since 3.4.8
         * @param int $parent_license_id The parent license ID to look up
         *
         * @return array Array of child license objects.
         */
        function get_child_licenses($parent_license_id = 0)
        {
        }
        /**
         * @param int $license_id
         *
         * @return string
         */
        function get_license_status($license_id)
        {
        }
        /**
         * Returns the status label
         *
         * @param int $license_id
         *
         * @since 2.7
         * @return string
         */
        function license_status($license_id)
        {
        }
        /**
         * @param int $license_id
         * @param string $status
         */
        function set_license_status($license_id, $status = 'active')
        {
        }
        /**
         * @param int $license_id
         * @param int $payment_id
         * @param int $download_id
         *
         * @return string
         */
        function get_license_length($license_id = 0, $payment_id = 0, $download_id = 0)
        {
        }
        /**
         * @param int $license_id
         *
         * @return bool
         */
        function is_lifetime_license($license_id)
        {
        }
        /**
         * @param int $license_id
         *
         * @return bool|mixed|string
         */
        function get_license_expiration($license_id)
        {
        }
        /**
         * @param int $license_id
         * @param int $expiration
         *
         * @return void
         */
        function set_license_expiration($license_id, $expiration)
        {
        }
        /**
         * @param int $license_id
         * @return void
         */
        function set_license_as_lifetime($license_id)
        {
        }
        /**
         * @param int $download_id
         * @param int $license_id
         *
         * @return mixed|void
         */
        function get_license_limit($download_id = 0, $license_id = 0)
        {
        }
        /**
         * Returns the license activation limit in a readable format
         *
         * @param int $license_id
         * @since 2.7
         * @return string|int
         */
        function license_limit($license_id = 0)
        {
        }
        /**
         * @param int  $download_id
         * @param null $price_id
         *
         * @return bool|int
         */
        function get_price_activation_limit($download_id = 0, $price_id = \null)
        {
        }
        /**
         * @param int  $download_id
         * @param int $price_id
         *
         * @return bool
         */
        function get_price_is_lifetime($download_id = 0, $price_id = \null)
        {
        }
        /**
         * @param int $license_id
         * @param int $download_id
         *
         * @return bool
         */
        function is_at_limit($license_id = 0, $download_id = 0)
        {
        }
        /**
         * @param int $payment_id
         *
         * @return bool
         */
        function is_renewal($payment_id = 0)
        {
        }
        /**
         * Sanitize the item names to be able to compare them properly (else we get problems with HTML special characters created
         * by WordPress like hyphens replaced by long dashes
         *
         * @param int $download_id
         * @param string $item_name
         * @return boolean
         * @since 2.5
         */
        function check_item_name($download_id = 0, $item_name = 0, $license = \null)
        {
        }
        /**
         * @param $download_id
         *
         * @return bool|mixed
         */
        function get_download_version($download_id)
        {
        }
        /**
         * @param int $download_id Download (Post) ID
         *
         * @return bool|mixed
         */
        function get_beta_download_version($download_id)
        {
        }
        /**
         * @param int    $download_id
         * @param string $license_key
         * @param string $url
         * @param bool   $download_beta
         *
         * @return mixed|void
         */
        function get_encoded_download_package_url($download_id = 0, $license_key = '', $url = '', $download_beta = \false)
        {
        }
        /**
         * @param int    $download_id
         * @param string $license_key
         * @param string $hash
         * @param int    $expires
         */
        function get_download_package($download_id, $license_key, $hash, $expires = 0)
        {
        }
        /**
         * Force activation count increase
         *
         * This checks whether we should always count activations
         *
         * By default activations are tied to URLs so that a single URL is not counted as two separate activations.
         * Desktop software, for example, is not tied to a URL so it can't be counted in the same way.
         *
         * @param int $license_id
         * @access      private
         * @since       1.3.9
         * @return      bool
         */
        public function force_increase($license_id = 0)
        {
        }
        /**
         * Add the /changelog enpoint
         *
         * Allows for the product changelog to be shown as plain text
         *
         * @access      public
         * @since       1.7
         */
        public function changelog_endpoint()
        {
        }
        /**
         * Displays a changelog
         *
         * @access      public
         * @since       1.7
         */
        public function show_changelog()
        {
        }
        /**
         * Prevent file downloads on expired license keys
         *
         * @access      public
         * @since       2.3
         *
         * @param int $download_id
         * @param string $email
         */
        public function prevent_expired_downloads($download_id, $email, $payment_id, $args)
        {
        }
        /**
         * Return an array of data for if a user has the ability to be delivered a file via a download link.
         *
         * Triggers on the edd_process_verified_download hook in EDD Core.
         *
         * @since 3.6
         *
         * @param int    $download_id
         * @param string $email
         * @param int    $payment_id
         * @param array  $args
         *
         * @return array $args {
         *     @type bool   $success If the download is available, true for yes, false for no.
         *     @type string $message (Required for success => false) A message to display during wp_die
         *     @type string $title (Required for success => false) A title to display in the browser <title> tag during wp_die
         *     @type int    $response (Required for success => false) The HTTP response code to use for wp_die
         * }
         */
        public function license_can_download($download_id, $email, $payment_id, $args)
        {
        }
        /**
         * Removes the queries caused by `widgets_init` for remote API calls (and for generating the download)
         *
         * @return void
         */
        public function reduce_query_load()
        {
        }
        /**
         * Updates license details when a payment is updated
         *
         * @param int $payment_id
         *
         * @return void
         */
        public function update_licenses_on_payment_update($payment_id)
        {
        }
        /**
         * Lowercases site URL's, strips HTTP protocols and strips www subdomains.
         *
         * @param string $url
         *
         * @return string
         */
        public function clean_site_url($url)
        {
        }
        /**
         * Looks up license keys by email that match the registering user
         *
         * This is for users that purchased as a guest and then came
         * back and created an account.
         *
         * @access      public
         * @since       3.1
         * @param      int $user_id the new user's ID
         * @return      void
         */
        function add_past_license_keys_to_new_user($user_id)
        {
        }
        /**
         * Check if a URL is considered a local one
         *
         * @since  3.2.7
         *
         * @param string $url A URL that possibly represents a local environment.
         * @param string $environment The current site environment. Default production.
         *                            Always production in WordPress < 5.5
         *
         * @return boolean      If we're considering the URL local or not
         */
        public function is_local_url($url = '', $environment = 'production')
        {
        }
        /**
         * Update customer email on profile update
         *
         * @since 3.5
         * @deprecated No longer used in 3.6 since license titles are not a property of licenses.
         * @param bool $updated whether or not the customer was updated
         * @param int $customer_id The ID of the customer
         * @param array $data The updated data for the customer
         * @return void
         */
        function update_license_email_on_customer_update($updated = \false, $customer_id = 0, $data = array())
        {
        }
        /**
         * Get emails for a license
         *
         * This is currently only used for matching
         * on renewals with the Enforced Matching setting enabled.
         *
         * @since 3.5
         * @access public
         * @param int $license_id The ID to get emails for
         * @return array $emails The emails for this license
         */
        function get_emails_for_license($license_id = 0)
        {
        }
    }
    /**
     * Class EDD_SL_DB
     *
     * @since 3.6
     */
    class EDD_SL_DB extends \EDD_DB
    {
        public function update($row_id, $data = array(), $where = '')
        {
        }
        public function insert($data, $type = '')
        {
        }
        /**
         * Get a value from wp_cache
         *
         * @since 3.6
         *
         * @param string $group
         * @param string $key
         *
         * @return bool|mixed
         */
        protected function get_cache($key = '', $group = '')
        {
        }
        /**
         * Set a value in wp_cache
         *
         * @since 3.6
         *
         * @param string $group
         * @param string $key
         * @param string $data
         * @param int    $expires
         *
         * @return bool
         */
        protected function set_cache($key = '', $data = '', $group = '', $expires = \MINUTE_IN_SECONDS)
        {
        }
        /**
         * Delete a value from wp_cache
         *
         * @since 3.6
         *
         * @param string $group
         * @param string $key
         *
         * @return bool
         */
        protected function delete_cache($key = '', $group = '')
        {
        }
        /**
         * Delete multiple items from the cache from a single group.
         *
         * @since 3.6.4
         *
         * @param array  $keys  The cache keys to delete.
         * @param string $group The cache group to delete them from.
         *
         * @return array $deleted Each requested cache key will be listed as a key in the array and the value is a boolean if
         *               it was successfully deleted.
         */
        protected function delete_cache_multi($keys = array(), $group = '')
        {
        }
    }
    /**
     * The License Activations DB Class
     *
     * @since  3.6
     */
    class EDD_SL_Activations_DB extends \EDD_SL_DB
    {
        /**
         * Get things started
         *
         * @access  public
         * @since   3.6
         */
        public function __construct()
        {
        }
        /**
         * Get columns and formats
         *
         * @access  public
         * @since   3.6
         */
        public function get_columns()
        {
        }
        /**
         * Returns the column labels only.
         *
         * @since 3.6
         * @return array
         */
        public function get_column_labels()
        {
        }
        /**
         * Get default column values
         *
         * @access  public
         * @since   3.6
         */
        public function get_column_defaults()
        {
        }
        /**
         * Retrieve all commissions for a customer
         *
         * @access  public
         * @since   3.6
         */
        public function get_activations($args = array())
        {
        }
        /**
         * Delete any license activations
         *
         * @since 3.6
         * @param $license_id
         *
         * @return false|int
         */
        public function delete_all_activations($license_id)
        {
        }
        /**
         * Count the total number of licenses in the database
         *
         * @access  public
         * @since   3.6
         */
        public function count($args = array())
        {
        }
        public function delete($site_id = '')
        {
        }
        /**
         * Create the table
         *
         * @access  public
         * @since   3.6
         */
        public function create_table()
        {
        }
    }
    /**
     * EDD Software Licensing Changelog Widget Class
     *
     * @package EDD_Software_Licensing
     * @since 2.5.3
     * @version 2.5.3
     * @author Lee Willis
     * @see WP_Widget
     */
    final class EDD_SL_Changelog_Widget extends \WP_Widget
    {
        /**
         * Constructor Function
         *
         * @since 2.5.3
         * @access public
         * @see WP_Widget::__construct()
         */
        public function __construct()
        {
        }
        /**
         * Flush widget cache.
         *
         * @since 2.5.3
         * @access public
         * @uses wp_cache_delete()
         * @return void
         */
        public function flush_widget_cache($post_id = \null)
        {
        }
        /**
         * Render the widget output.
         *
         * @since 2.5.3
         * @access public
         * @return void
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Processes the widget's options to be saved.
         *
         * @since 2.5.3
         * @access public
         * @uses EDD_Reviews_Per_Product_Reviews_Widget::flush_widget_cache()
         * @return void
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Generates the administration form for the widget.
         *
         * @since 2.5.3
         * @access public
         * @param array $instance The array of keys and values for the widget.
         * @return void
         */
        public function form($instance)
        {
        }
    }
    /**
     * EDD_SL_Download
     *
     * This class is for working with downloads within the licensing scope
     *
     * @package     EDDSoftwareLicensing
     * @subpackage  Classes/License
     * @copyright   Copyright (c) 2016, Chris Klosowski
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       3.5
     */
    class EDD_SL_Download extends \EDD_Download
    {
        /**
         * Return a raw post title
         *
         * See https://github.com/easydigitaldownloads/EDD-Software-Licensing/issues/1074
         *
         * @since 3.5.16
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Return if a download has licensing enabled.
         *
         * @since 3.5
         * @return bool
         */
        public function licensing_enabled()
        {
        }
        /**
         * Get the activation limit for a licensed download.
         *
         * @since 3.5
         * @param bool $price_id
         *
         * @return int|boolean
         */
        public function get_activation_limit($price_id = \false)
        {
        }
        /**
         * Get the activation limit for a price ID.
         *
         * @since 3.5
         * @param $price_id
         *
         * @return bool|int
         */
        public function get_price_activation_limit($price_id)
        {
        }
        /**
         * Retrieve a pre-defined license key for this download.
         *
         * @since 3.5
         *
         * @return string|boolean
         */
        public function get_new_license_key()
        {
        }
        /**
         * Return if a download is a lifetime license.
         *
         * @since 3.5
         *
         * @return bool
         */
        public function is_lifetime()
        {
        }
        /**
         * Return if a download price ID is a lifetime license.
         *
         * @since 3.5
         * @param $price_id
         *
         * @return bool
         */
        public function is_price_lifetime($price_id)
        {
        }
        /**
         * Get the unit for licenses as days, weeks, months, or years
         *
         * @param int|false $price_id Price ID.
         *
         * @since 3.5
         * @return string|false
         */
        public function get_expiration_unit($price_id = \false)
        {
        }
        /**
         * Return a expiration unit that is consistent with the length unit.
         *
         * @since 3.5.4
         * @param bool|int $price_id The price ID for a variable product (optional).
         * @return string
         */
        public function get_expiration_unit_nicename($price_id = \false)
        {
        }
        /**
         * Determine which file to deliver when the SL API requests a package URL.
         *
         * @since 3.6
         * @return mixed
         */
        public function get_upgrade_file_key()
        {
        }
        /**
         * Determine which file to deliver when the SL API requests a beta package URL.
         *
         * @since 3.6
         * @return mixed
         */
        public function get_beta_upgrade_file_key()
        {
        }
        /**
         * Return the numeric length of the download licenses.
         *
         * @param int|false $price_id
         *
         * @since 3.5
         * @return int|false
         */
        public function get_expiration_length($price_id = \false)
        {
        }
        /**
         * Determine if a download has betas enabled
         *
         * @since 3.6
         *
         * @return bool
         */
        public function has_beta()
        {
        }
        /**
         * Retrieve the stable version string.
         *
         * @since 3.6
         * @return string
         */
        public function get_version()
        {
        }
        /**
         * Retrieve the beta version string
         *
         * @since 3.6
         * @return string
         */
        public function get_beta_version()
        {
        }
        /**
         * Retrieve the changelog for a licensed download.
         *
         * @since  3.6
         * @since  3.6.10 Added $truncate varaible to allow supporting the `<!--more-->` tag.
         *
         * @param boolean $truncate If the changelog should be truncated.
         * @return string
         */
        public function get_changelog($truncate = \false)
        {
        }
        /**
         * Retrieve the beta changelog for a licensed download
         *
         * @since 3.6
         *
         * @return string
         */
        public function get_beta_changelog()
        {
        }
        /**
         * Retrieve the beta file data
         *
         * @since 3.6
         * @return array
         */
        public function get_beta_files()
        {
        }
        /**
         * Retrieves the download version requirements.
         *
         * @since 3.8
         * @return array
         */
        public function get_requirements()
        {
        }
    }
    class EDD_SL_Emails
    {
        /**
         * @var bool If true, then exceptions will be thrown on failures.
         * @since 3.8.3
         */
        protected $throw_exceptions = \false;
        function __construct()
        {
        }
        /**
         * Enables exceptions on errors.
         *
         * @since 3.8.3
         *
         * @return $this
         */
        public function with_exceptions()
        {
        }
        /**
         * Add {license_keys} Email Tag.
         *
         * @since 2.4
         * @access public
         */
        public function add_email_tag()
        {
        }
        public function licenses_tag($payment_id = 0)
        {
        }
        public function send_renewal_reminder($license_id = 0, $notice_id = 0)
        {
        }
        public function filter_reminder_template_tags($text = '', $license_id = 0)
        {
        }
        /**
         * Determine if email notifications for this license are disabled
         *
         * @since  3.5.11
         *
         * @param  object $license EDD_SL_License object
         *
         * @return bool
         */
        public function is_unsubscribed(\EDD_SL_License $license)
        {
        }
        /**
         * Renders a preview for a renewal email.
         *
         * @since 3.7
         * @return void
         */
        public function display_renewal_email_preview()
        {
        }
    }
    /**
     * The License DB Class
     *
     * @since  3.6
     */
    class EDD_SL_License_DB extends \EDD_SL_DB
    {
        /**
         * Get things started
         *
         * @access  public
         * @since   3.6
         */
        public function __construct()
        {
        }
        /**
         * Get columns and formats
         *
         * @access  public
         * @since   3.6
         */
        public function get_columns()
        {
        }
        /**
         * Returns the column labels only.
         *
         * @since 3.6
         * @return array
         */
        public function get_column_labels()
        {
        }
        /**
         * Get default column values
         *
         * @access  public
         * @since   3.6
         */
        public function get_column_defaults()
        {
        }
        /**
         * Retrieve a row by the primary key
         *
         * @access  public
         * @since   2.1
         * @return  object
         */
        public function get($row_id)
        {
        }
        /**
         * Retrieve licenses for the requested arguments.
         *
         * @access  public
         * @since   3.6
         *
         * @return EDD_SL_License[]|int[]
         */
        public function get_licenses($args = array())
        {
        }
        /**
         * Count the total number of licenses in the database
         *
         * @access  public
         * @since   3.6
         */
        public function count($args = array())
        {
        }
        public function delete($license_id = 0)
        {
        }
        /**
         * Create the table
         *
         * @access  public
         * @since   3.6
         */
        public function create_table()
        {
        }
    }
    /**
     * The License Meta DB Class
     *
     * @since  3.6
     */
    class EDD_SL_License_Meta_DB extends \EDD_SL_DB
    {
        /**
         * Get things started
         *
         * @access  public
         * @since   3.6
         */
        public function __construct()
        {
        }
        /**
         * Get columns and formats
         *
         * @access  public
         * @since   3.6
         */
        public function get_columns()
        {
        }
        /**
         * Register the table with $wpdb so the metadata api can find it
         *
         * @access  public
         * @since   3.6
         */
        public function register_table()
        {
        }
        /**
         * Get default column values
         *
         * @access  public
         * @since   2.4
         */
        public function get_column_defaults()
        {
        }
        /**
         * Retrieve license meta field for a license.
         *
         * For internal use only. Use EDD_SL_License->get_meta() for public usage.
         *
         * @param   int    $license_id      License ID.
         * @param   string $meta_key        The meta key to retrieve.
         * @param   bool   $single          Whether to return a single value.
         * @return  mixed                   Will be an array if $single is false. Will be value of meta data field if $single is true.
         *
         * @access  private
         * @since   3.6
         */
        public function get_meta($license = 0, $meta_key = '', $single = \false)
        {
        }
        /**
         * Given a meta key, value combination, return license ID(s) that match.
         *
         * @since 3.6
         *
         * @param string $meta_key   The meta key being searched for.
         * @param string $meta_value The meta value being searched for.
         * @param bool   $single     If the license ID should be returned (true) or all found license ids (false).
         *
         * @return int|array
         */
        public function get_license_id($meta_key = '', $meta_value = '', $single = \false)
        {
        }
        /**
         * Add meta data field to a license record.
         *
         * For internal use only. Use EDD_SL_License->add_meta() for public usage.
         *
         * @param   int    $license_id    License ID.
         * @param   string $meta_key      Metadata name.
         * @param   mixed  $meta_value    Metadata value.
         * @param   bool   $unique        Optional, default is false. Whether the same key should not be added.
         * @return  bool                  False for failure. True for success.
         *
         * @access  private
         * @since   3.6
         */
        public function add_meta($license_id, $meta_key, $meta_value, $unique = \false)
        {
        }
        /**
         * Update license meta field based on License ID.
         *
         * For internal use only. Use EDD_SL_License->update_meta() for public usage.
         *
         * Use the $prev_value parameter to differentiate between meta fields with the
         * same key and License ID.
         *
         * If the meta field for the license does not exist, it will be added.
         *
         * @param   int    $license_id   License ID.
         * @param   string $meta_key      Metadata key.
         * @param   mixed  $meta_value    Metadata value.
         * @param   mixed  $prev_value    Optional. Previous value to check before removing.
         * @return  bool                  False on failure, true if success.
         *
         * @access  private
         * @since   3.6
         */
        public function update_meta($license_id, $meta_key, $meta_value, $prev_value = '')
        {
        }
        /**
         * Remove metadata matching criteria from a license record.
         *
         * For internal use only. Use EDD_SL_License->delete_meta() for public usage.
         *
         * You can match based on the key, or key and value. Removing based on key and
         * value, will keep from removing duplicate metadata with the same key. It also
         * allows removing all metadata matching key, if needed.
         *
         * @param   int    $license_id    License ID.
         * @param   string $meta_key      Metadata name.
         * @param   mixed  $meta_value    Optional. Metadata value.
         * @param   bool   $delete_all    If all items should be deleted or just the first
         * @return  bool                  False for failure. True for success.
         *
         * @access  private
         * @since   3.6
         */
        public function delete_meta($license_id = 0, $meta_key = '', $meta_value = '', $delete_all = \false)
        {
        }
        /**
         * Delete meta for a license ID
         *
         * @since 3.6
         * @param $license_id
         */
        public function delete_all_meta($license_id)
        {
        }
        /**
         * Create the table
         *
         * @access  public
         * @since   3.6
         */
        public function create_table()
        {
        }
    }
    class EDD_SL_License
    {
        /**
         * The Payment ID
         *
         * @since  3.5
         * @var    integer
         */
        public $ID = 0;
        protected $_ID = 0;
        protected $exists = \false;
        protected $parent = 0;
        protected $post_parent = 0;
        // Needed for backwards compatibility and magic __get
        protected $name = \null;
        protected $key = \null;
        protected $license_key = \null;
        protected $user_id = \null;
        protected $customer_id = \null;
        protected $customer = \null;
        protected $payment_id = \null;
        protected $payment_ids = \null;
        protected $cart_index = \null;
        protected $download = \null;
        protected $download_id = \null;
        protected $price_id = \null;
        protected $activation_limit = \null;
        protected $sites = \null;
        protected $activation_count = \null;
        protected $date_created = \null;
        protected $expiration = \null;
        protected $is_lifetime = \null;
        protected $status = \null;
        protected $post_status = \null;
        protected $old_status = \null;
        /**
         * @var null|EDD_SL_License[]
         */
        protected $child_licenses = \null;
        /**
         * EDD_SL_License constructor.
         *
         * @param int|string|object $license_id_or_object The license ID, key, or full row object from the database.
         */
        public function __construct($license_id_or_object = \false)
        {
        }
        /**
         * Magic GET function
         *
         * @since  3.5
         *
         * @param  string $key  The property.
         * @pram   mixed  $args Array of possible arguments to pass.
         * @return mixed        The value.
         */
        public function __get($key)
        {
        }
        /**
         * Magic SET function
         *
         * Sets up the pending array for the save method.
         *
         * @since  3.5
         *
         * @param string $key   The property name.
         * @param mixed  $value The value of the property.
         */
        public function __set($key, $value)
        {
        }
        /**
         * Magic ISSET function, which allows empty checks on protected elements.
         *
         * @since  3.5
         *
         * @param  string $name The attribute to get.
         * @return boolean       If the item is set or not.
         */
        public function __isset($name)
        {
        }
        /**
         * Generate a license key for the download ID provided. Also generates any child license keys if the download is
         * a bundled product.
         *
         * @since 3.5
         * @param int       $download_id The Download ID to generate a license key for.
         * @param int       $payment_id  The Payment ID associated with the license.
         * @param bool|int  $price_id    The Price ID for the item to generate a key for
         * @param int       $cart_index  The cart index for the key being generated
         * @param array     $options     Array of options (parent_license_id, activation_limit, is_lifetime, license_length)
         *
         * @return array $keys    License keys created during this process
         */
        public function create($download_id = 0, $payment_id = 0, $price_id = \false, $cart_index = 0, $options = array())
        {
        }
        /**
         * A helper function to update multiple values
         *
         * @since 3.5
         * @since 3.6 - Updated for custom tables, now that most data is not in meta tables.
         *
         * @param array $data Key/Value array of property => value
         * @return bool If the row was updated
         */
        public function update($data = array())
        {
        }
        /**
         * Renew a license key
         *
         * @since 3.5
         *
         * @return bool If the license expiration was updated or not.
         */
        public function renew($payment_id = 0)
        {
        }
        /**
         * Enable a license by setting to active or inactive depending on number of sites activated
         *
         * @since 3.5
         * @return bool
         */
        public function enable()
        {
        }
        /**
         * Disable a license
         *
         * @since 3.5
         * @return bool
         */
        public function disable()
        {
        }
        /**
         * Delete a license record, the meta and any license activations.
         *
         * @since 3.6
         * @return bool
         */
        public function delete()
        {
        }
        /**
         * Get a post meta item for the payment
         *
         * @since  3.5
         *
         * @param  string  $meta_key The Meta Key
         * @param  boolean $single   Return single item or array
         *
         * @return mixed             The value from the post meta
         */
        public function get_meta($meta_key = '', $single = \true)
        {
        }
        /**
         * Update license meta
         *
         * @since 3.5
         * @param string $meta_key  The Meta Key to update
         * @param string $value     The value to update
         * @param string $old_value The old value (optional)
         *
         * @return bool|int
         */
        public function update_meta($meta_key = '', $value = '', $old_value = '')
        {
        }
        /**
         * Adds new license meta
         *
         * @param string $meta_key   The meta key to add.
         * @param mixed  $meta_value The meta value to add.
         * @param bool   $unique     Whether the same key should not be added. If true, adding meta for a key
         *                           that already exists will result in failure (`false` response).
         *
         * @return bool
         */
        public function add_meta($meta_key, $meta_value, $unique = \false)
        {
        }
        /**
         * Deletes license meta.
         *
         * @param string $meta_key   Meta key to delete.
         * @param string $meta_value Optional. Metadata value. Must be serializable if non-scalar.
         *                           If specified, only delete metadata entries with this value.
         *                           Otherwise, delete all entries with the specified meta_key.
         *                           Pass `null`, `false`, or an empty string to skip this check.
         * @param false  $delete_all Optional. If true, delete matching metadata entries for all objects,
         *                           ignoring the specified object_id. Otherwise, only delete
         *                           matching metadata entries for the specified object_id.
         *
         * @return bool
         */
        public function delete_meta($meta_key = '', $meta_value = '', $delete_all = \false)
        {
        }
        /**
         * Returns if the license has been generated yet.
         *
         * @since 3.5
         * @return bool
         */
        public function get_exists()
        {
        }
        /**
         * Get the name of the license 'title'
         *
         * @since 3.5
         * @param bool $full If we should return just the product name or the name and price ID name
         *
         * @return string
         */
        public function get_name($full = \true)
        {
        }
        /**
         * Allows regenerating a license key for a specific license, without altering any other data.
         *
         * @since 3.6.1
         * @param int $timestamp A 'salt' to generate a timestamp with, will use the current timestamp if not defined.
         *
         * @return bool
         */
        public function regenerate_key($timestamp = 0)
        {
        }
        /**
         * Get the activation limit for the license.
         *
         * @since 3.5
         * @return int
         */
        public function get_activation_limit($force_lookup = \false)
        {
        }
        /**
         * Gets the default activation count for the license.
         *
         * @return int
         */
        public function get_default_activation_count()
        {
        }
        /**
         * Removes any license limit set in post meta and determines it via the logic in get_activation_limit()
         *
         * @since 3.5
         * @return bool
         */
        public function reset_activation_limit()
        {
        }
        /**
         * Check if license is expired
         *
         * @since 3.5.9
         *
         * @return bool
         */
        public function is_expired()
        {
        }
        /**
         * Get the 'post_status' value of the license post object
         *
         * @since 3.5
         * @deprecated After moving to a custom table, post_status should not be relied upon. This is here for backwards
         *             compatibility.
         * @return string
         */
        public function get_post_status()
        {
        }
        /**
         * Get the license status formatted for display.
         *
         * @since 3.5
         * @return string
         */
        public function get_display_status()
        {
        }
        /**
         * Get the URL used to add a license renewal to the cart
         *
         * @since 3.5
         * @return string
         */
        public function get_renewal_url()
        {
        }
        /**
         * Get the URL used to add a license renewal to the cart
         *
         * @since 3.5.11
         * @return string
         */
        public function get_unsubscribe_url()
        {
        }
        /**
         * Return a list of EDD_SL_License objects for the child licenses
         *
         * @since 3.5
         * @return EDD_SL_License[] Returns an array of EDD_SL_License objects
         */
        public function get_child_licenses()
        {
        }
        /**
         * Given a site URL, see if it's been activated for the license
         *
         * @since 3.5
         * @param string $site_url
         *
         * @return bool
         */
        public function is_site_active($site_url)
        {
        }
        /**
         * Get the activation limit.
         *
         * @since 3.5
         * @return mixed
         */
        public function license_limit()
        {
        }
        /**
         * Returns if the license is at it's activation limit.
         *
         * @since 3.5
         * @return bool
         */
        public function is_at_limit()
        {
        }
        /**
         * Get the string equivalent of the length of the license. For example: +1years
         *
         * @since 3.5
         * @return string
         */
        public function license_length()
        {
        }
        /**
         * Used to display the term for a given license to the user
         *
         * @since 3.5.7
         * @return string
         */
        public function license_term()
        {
        }
        /**
         * Returns an array of activation records, including all activation details for a license.
         *
         * @since 3.6.6
         * @return array
         */
        public function get_activations()
        {
        }
        /**
         * Retrieves the download object associated with this license.
         *
         * @return EDD_SL_Download
         */
        public function get_download()
        {
        }
        /**
         * Add a given site to the list of activated sites for the license.
         *
         * @since 3.5
         * @param string $url A URL that possibly represents a local environment.
         * @param string $environment The current site environment. Default production.
         *                            Always production in WordPress < 5.5
         *
         * @return array|bool
         */
        public function add_site($site, $environment = 'production')
        {
        }
        /**
         * Remove a site from the list of activated sites on the license.
         *
         * @since 3.5
         * @param $site
         *
         * @return bool|int
         */
        public function remove_site($site = '')
        {
        }
        public function update_site($args = array())
        {
        }
        /**
         * Given a property, get the associated post_meta key.
         *
         * @since 3.5
         * @param string $property
         *
         * @return bool|mixed
         */
        public function get_property_meta_key($property = '')
        {
        }
        /**
         * Add license log.
         *
         * @since 3.6
         *
         * @param $title
         * @param string|array $message Message to add as a log. Arrays are converted to JSON.
         * @param string|array $type Log type(s).
         * @return int|WP_Error Log ID.
         */
        public function add_log($title, $message = \null, $type = \null)
        {
        }
        /**
         * Get the license logs.
         *
         * @since 3.6
         *
         * @return array List of logs.
         */
        public function get_logs()
        {
        }
    }
    /**
     * The class to process downloading a package URL from the tokenized URLs
     *
     * @since  3.2.4
     */
    class EDD_SL_Package_Download
    {
        /**
         * Initialize the request
         */
        public function __construct()
        {
        }
        /**
         * Process the request for a package download
         *
         * @since  3.2.4
         * @return  void
         */
        public function process_request()
        {
        }
        /**
         * Parse the URL for the package downloader
         *
         * @since  3.2.4
         * @return array Array of parsed url information
         */
        public function parse_url()
        {
        }
        public function get_encoded_download_package_url($download_id = 0, $license_key = '', $url = '', $download_beta = \false)
        {
        }
        /**
         * Deliver the file download
         *
         * @since  3.2.4
         * @return void
         */
        public function process_package_download()
        {
        }
        /**
         * Deliver the package download URL
         *
         * @since  3.2.4
         * @param  int $download_id The Download ID to get the package for
         * @param  string  $license_key The license key
         * @param  string  $hash        The hash to verify access
         * @param  int $expires         The TTL for this link
         * @return string               The URL for the download package
         */
        public function get_download_package($download_id, $license_key, $hash, $expires = 0, $download_beta = \false)
        {
        }
    }
    /**
     * Class EDD_SL_Readme_Parser
     *
     * @link   https://meta.trac.wordpress.org/browser/sites/trunk/wordpress.org/public_html/wp-content/plugins/plugin-directory/readme/class-parser.php
     */
    class EDD_SL_Readme_Parser extends \WordPressdotorg\Plugin_Directory\Readme\Parser
    {
        /**
         * Constructor.
         *
         * @return void
         */
        public function __construct($file)
        {
        }
        /**
         * Parse markdown and return HTML.
         *
         * @link https://github.com/erusev/parsedown
         *
         * @param string $text
         *
         * @return string
         */
        public function parse_markdown($text)
        {
        }
        /**
         * Return parsed readme.txt as array.
         *
         * @return array $data
         */
        public function parse_data()
        {
        }
        /**
         * @param array $users
         *
         * @return array
         */
        protected function sanitize_contributors($users)
        {
        }
        /**
         * Converts FAQ from dictionary list to h4 style.
         *
         * @param array $data Array of parsed readme data.
         *
         * @return array $data
         */
        public function faq_as_h4($data)
        {
        }
        /**
         * Converts wp.org readme section items to h4 style.
         *
         * @param string $section Readme section.
         * @param array  $data Array of parsed readme data.
         *
         * @return array $data
         */
        public function readme_section_as_h4($section, $data)
        {
        }
        /**
         * Replace parent method as some users don't have `mb_strrpos()`.
         *
         * @access protected
         *
         * @param string $desc
         * @param int    $length
         *
         * @return string
         */
        protected function trim_length($desc, $length = 150)
        {
        }
    }
    /**
     * Requirements
     *
     * Used for checking if requirements are met.
     *
     * @package   edd-software-licensing
     * @copyright Copyright (c) 2021, Sandhills Development, LLC
     * @license   GPL2+
     * @since     3.7.2
     */
    class EDD_SL_Requirements
    {
        /**
         * EDD_SL_Requirements constructor.
         *
         * @param array $requirements
         */
        public function __construct($requirements = array())
        {
        }
        /**
         * Adds a new requirement.
         *
         * @param string $id      Unique ID for the requirement.
         * @param array  $args    {
         *                        Array of arguments.
         *
         * @type string  $minimum Minimum version required.
         * @type string  $name    Display name for the requirement.
         *                     }
         *
         * @return void
         */
        public function add_requirement($id, $args)
        {
        }
        /**
         * Whether or not all requirements have been met.
         *
         * @return bool
         */
        public function met()
        {
        }
        /**
         * Returns unmet requirements.
         *
         * @since 3.8
         *
         * @return array
         */
        public function get_unmet()
        {
        }
        /**
         * Returns requirements errors.
         *
         * @return WP_Error
         */
        public function get_errors()
        {
        }
    }
    /**
     * EDD_SL_Roles Class
     *
     * This class handles adding capabilities to the Easy Digital Downloads core roles
     *
     *
     * @since 3.6
     */
    class EDD_SL_Roles
    {
        /**
         * Get things going
         *
         * @since 3.6
         */
        public function __construct()
        {
        }
        /**
         * Add new shop-specific capabilities
         *
         * @access public
         * @since 3.6
         * @global WP_Roles $wp_roles
         * @return void
         */
        public function add_caps()
        {
        }
        /**
         * Remove core post type capabilities (called on uninstall)
         *
         * @access public
         * @since 3.6
         * @return void
         */
        public function remove_caps()
        {
        }
    }
    /**
     * Work with EDD through WP-CLI
     *
     * EDD_CLI Class
     *
     * Adds CLI support to EDD through WP-CL
     *
     * @since   1.0
     */
    class EDD_SL_CLI extends \EDD_CLI
    {
        /**
         * Migrate the Software Licensing to the custom tables
         *
         * ## OPTIONS
         *
         * --force=<boolean>: If the routine should be run even if the upgrade routine has been run already
         *
         * ## EXAMPLES
         *
         * wp edd-sl migrate_licenses
         * wp edd-sl migrate_licenses --force
         */
        public function migrate_licenses($args, $assoc_args)
        {
        }
        /*
         * Add URLs to licenses
         *
         * ## OPTIONS
         *
         * --number=<int>: The number of licenses to add URLs to
         *
         * ## EXAMPLES
         *
         * wp edd-sl activate_licenses
         * wp edd-sl activate_licenses --number=100
         */
        public function activate_licenses($args, $assoc_args)
        {
        }
    }
}
namespace {
    /**
     * Add the licenses tab to the customer interface if the customer has licenses
     *
     * @since  3.3
     * @param  array $tabs The tabs currently added to the customer view
     * @return array       Updated tabs array
     */
    function edd_sl_customer_tab($tabs)
    {
    }
    /**
     * Register the licenses view for the customer interface
     *
     * @since  3.3
     * @param  array $tabs The tabs currently added to the customer views
     * @return array       Updated tabs array
     */
    function edd_sl_customer_view($views)
    {
    }
    /**
     * Display the licenses area for the customer view
     *
     * @since  3.3
     * @param  object $customer The Customer being displayed
     * @return void
     */
    function edd_sl_customer_licenses_view($customer)
    {
    }
    /**
     * Adds "Renewals" to the report views
     *
     * @deprecated 3.7
     *
     * @access      public
     * @since       2.2
     * @return      void
     */
    function edd_sl_add_renewals_view($views)
    {
    }
    /**
     * Show Renewals Graph
     *
     * @deprecated 3.7
     *
     * @access      public
     * @since       2.2
     * @return      void
     */
    function edd_sl_show_renewals_graph()
    {
    }
    /**
     * Show license upgrades
     *
     * @deprecated 3.7
     *
     * @access      public
     * @since       3.3
     * @return      void
     */
    function edd_sl_show_upgrades_graph()
    {
    }
    /**
     * Renders the license key export box
     *
     * @access      public
     * @since       3.0
     */
    function edd_sl_license_export_box()
    {
    }
    /**
     * Register the license keys batch exporter.
     *
     * @since 3.6
     */
    function edd_sl_register_batch_export()
    {
    }
    /**
     * Loads the API requests batch process if needed
     *
     * @since  2.7
     * @param  string $class The class being requested to run for the batch export
     * @return void
     */
    function edd_sl_include_batch_processor($class)
    {
    }
    /**
     * Remvoes the License Renewal Notice menu link
     *
     * @since       3.0
     * @return      void
    */
    function edd_sl_hide_renewal_notice_page()
    {
    }
    /**
     * Add Commissions link
     *
     * @since       1.0
     * @return      void
    */
    function edd_sl_add_licenses_link()
    {
    }
    /**
     * Modifies the settings screen title for the license renewal notice page.
     *
     * @since 3.8.8
     * @param string $title
     * @param string $current_page
     * @return string
     */
    function edd_sl_admin_settings_page_title($title, $current_page)
    {
    }
    /**
     * Process license updates for the single view
     *
     * @since 3.5
     * @return void
     */
    function edd_sl_process_license_update()
    {
    }
    /**
     * Process the request to regenerate a license key.
     *
     * @since 3.6.1
     */
    function edd_sl_process_regenerate_license_key()
    {
    }
    /**
     * Update license information
     *
     * @since 3.5
     * @since 3.6   Function was updated to handle processing more information but function name left for backwards compatibility
     * @return void
     */
    function edd_sl_process_license_exp_update()
    {
    }
    /**
     * Send a renewal notice
     *
     * @since 3.5
     * @return void
    */
    function edd_sl_send_renewal_notice()
    {
    }
    /**
     * Delete a license
     *
     * @since 3.5
     * @return void
    */
    function edd_sl_delete_license($args)
    {
    }
    /**
     * Action to add the generated license to the license log when generating new keys for a Download
     *
     * @since       2.6
     * @return      void
    */
    function edd_sl_log_generated_license($license_id, $d_id, $payment_id, $type)
    {
    }
    /**
     * Handle the ajax call to increase an activation limit
     *
     * @since       2.6
     * @return      void
    */
    function edd_sl_ajax_increase_limit()
    {
    }
    /**
     * Handle the ajax call to decrease an activation limit
     *
     * @since       2.6
     * @return      void
    */
    function edd_sl_ajax_decrease_limit()
    {
    }
    /**
     * Handle the AJAX call to fetch the license logs for a given license ID
     */
    function edd_sl_ajax_get_license_logs()
    {
    }
    /**
     * Add licenses and license logs to store reset
     *
     * @since  3.5
     * @param  array $post_types Current post types to remove in the reset
     * @return array             The post types with logs
     */
    function edd_sl_reset_post_types($post_types)
    {
    }
    /**
     * Find any license IDs
     *
     * @since  3.6
     * @param  array $items Current items to remove from the reset
     * @return array        The items with any subscription customer entires
     */
    function edd_sl_reset_delete_license_ids($items)
    {
    }
    /**
     * Isolate any License IDs to remove from the db on reset
     *
     * @since  3.6
     * @param  string $type The type of item to remove from the initial findings
     * @param  array  $item The item to remove
     * @return string       The determine item type
     */
    function edd_sl_reset_license_ids($type, $item)
    {
    }
    /**
     * Add an SQL item to the reset process deleting any license data.
     *
     * @since  3.6
     * @param  array  $sql An Array of SQL statements to run
     * @param  string $ids The IDs to remove for the given item type
     * @return array       Returns the array of SQL statements with statements added
     */
    function edd_sl_reset_license_queries($sql, $ids)
    {
    }
    /**
     * Toggle license subscription notices
     *
     * @since 3.8
     * @param  array $args An array of arguments from the GET query.
     * @return void
     */
    function edd_sl_toggle_license_subscription($args)
    {
    }
    /**
     * Register a view for the single license view
     *
     * @since  3.5
     * @param  array $views An array of existing views
     * @return array        The altered list of views
     */
    function edd_sl_register_default_license_views($views)
    {
    }
    /**
     * Register a tab for the single license view
     *
     * @since  3.5
     * @param  array $tabs An array of existing tabs
     * @return array       The altered list of tabs
     */
    function edd_sl_register_default_license_tabs($tabs)
    {
    }
    /**
     * Register the Delete icon as late as possible so it's at the bottom
     *
     * @since  3.5
     * @param  array $tabs An array of existing tabs
     * @return array       The altered list of tabs, with 'delete' at the bottom
     */
    function edd_sl_register_delete_license_tab($tabs)
    {
    }
    /**
     * Forces the Cache-Control header on our license views in admin to send the no-store header
     * which prevents the back-forward cache (bfcache) from storing a copy of this page in local
     * cache. This helps make sure that page elements modified via AJAX and DOM manipulations aren't
     * incorrectly shown as if they never changed.
     *
     * See: https://github.com/easydigitaldownloads/EDD-Software-Licensing/issues/1346#issuecomment-382159918
     *
     * @since 3.6.1
     * @param array $headers An array of nocache headers.
     *
     * @return array
     */
    function _edd_sl_bfcache_buster($headers)
    {
    }
    /**
     * Renders the main Licenses admin page
     *
     * @since       1.0
     * @return      void
    */
    function edd_sl_licenses_page()
    {
    }
    /**
     * Register the views for license management
     *
     * @since  3.5
     * @return array Array of views and their callbacks
     */
    function edd_sl_license_views()
    {
    }
    /**
     * Register the tabs for license management
     *
     * @since  3.5
     * @return array Array of tabs for the customer
     */
    function edd_sl_license_tabs()
    {
    }
    /**
     * List table of licenses
     *
     * @since  3.5
     * @return void
     */
    function edd_sl_licenses_list()
    {
    }
    /**
     * Renders the license view wrapper
     *
     * @since  3.5
     * @param  string $view      The View being requested
     * @param  array $callbacks  The Registered views and their callback functions
     * @return void
     */
    function edd_sl_render_license_view($view, $callbacks)
    {
    }
    /**
     * View a license
     *
     * @since  3.5
     * @param  $license The License object being displayed
     * @return void
     */
    function edd_sl_licenses_view($license)
    {
    }
    /**
     * View logs for a license
     *
     * @since  3.5
     * @param  EDD_SL_License $license The License object being displayed
     * @return void
     */
    function edd_sl_licenses_logs_view($license)
    {
    }
    /**
     * Delete a license
     *
     * @since  3.5
     * @param  $license The License object being displayed
     * @return void
     */
    function edd_sl_licenses_delete_view($license)
    {
    }
    /**
     * Add License Meta Box
     *
     * @since 1.0
     */
    function edd_sl_add_license_meta_box()
    {
    }
    /**
     * Render the download information meta box
     *
     * @since 1.0
     */
    function edd_sl_render_licenses_meta_box()
    {
    }
    /**
     * Render the download information meta box
     *
     * @since 1.0
     */
    function edd_sl_render_license_upgrade_paths_meta_box()
    {
    }
    /**
     * Render the individual upgrade path rows.
     * Approach and markup borrowed from edd_render_price_row().
     *
     * @param int   $key     The array key associated with the row.
     * @param array $args    The array of args needed to build the row.
     * @param int   $index   The index of the current row.
     *
     * @since 3.7
     * @return void
     */
    function edd_sl_render_upgrade_row($key, $args, $index)
    {
    }
    /**
     * Renders the Generate Missing Keys meta box
     *
     * @access      public
     * @since       2.6
     * @return      void
     */
    function edd_sl_missing_keys_metabox($post)
    {
    }
    /**
     * Disable "Software Licensing Settings" section in Advanced Settings view for Variable Pricing.
     *
     * @since 3.7
     *
     * @param int   $download_id Download ID.
     * @param int   $price_id    Price ID.
     * @param array $args        Custom parameters.
     */
    function edd_sl_licensing_price_section($download_id, $price_id, $args)
    {
    }
    /**
     * Save data from meta box
     *
     * @since 1.0
     */
    function edd_sl_download_meta_box_save($post_id)
    {
    }
    // Run after default so that we know EDD core has saved.
    /**
     * Display the license keys associated with a purchase on the View Order Details screen
     *
     * @since 1.9
     */
    function edd_sl_payment_details_meta_box($payment_id = 0)
    {
    }
    /**
     * Add ReadMe Meta Box
     *
     * @since  2.4
     */
    function edd_sl_add_readme_meta_box()
    {
    }
    /**
     * Save the ReadMe metabox when EDD saves other fields.
     * @param  array $fields Existing fields to save
     * @return array         Modified fields
     */
    function edd_sl_save_readme_metabox($fields)
    {
    }
    /**
     * Render the download information meta box
     *
     * @since  2.4
     */
    function edd_sl_readme_meta_box_render()
    {
    }
    /**
     * Render the readme meta box
     *
     * @since  2.4
     * @param int $post_id Download (Post) ID
     * @return void
     */
    function edd_sl_readme_meta_box_settings($post_id)
    {
    }
    /**
     * Render the Beta version meta box
     *
     * @return      void
     */
    function edd_sl_render_beta_version_meta_box()
    {
    }
    /**
     * Sanitize beta files
     *
     * @param array[] $files Beta files array. File arrays have `file` and `name` keys.
     *
     * @return array Sanitized array of file name and URI
     */
    function edd_sl_sanitize_file_save($files)
    {
    }
    /**
     * Add new minimum version required fields.
     *
     * @since 3.8
     * @param WP_Post $post The current post object.
     *
     * @return void
     */
    function edd_sl_requirements_fields($post)
    {
    }
    /**
     * Render the staged rollouts information.
     *
     * @param WP_Post $post
     *
     * @since 3.8
     */
    function edd_sl_staged_rollout_fields($post)
    {
    }
    function edd_sl_payment_upgrade_filters()
    {
    }
    /**
     * Filter the payment counts for upgrades and renewals
     *
     * @since 3.5.7
     * @param string $join
     *
     * @return string
     */
    function edd_sl_payment_count_filters($join = '')
    {
    }
    /**
     * Modifies the orders list table query in EDD 3.0 to filter by renewal or upgrade.
     *
     * @param array                       $clauses Query clauses.
     * @param \EDD\Database\Queries\Order $query   Query class.
     *
     * @since 3.7.1
     * @return array
     */
    function edd_sl_filter_orders_list_table_query($clauses, $query)
    {
    }
    /**
     * Modifies the orders list table status column to show an icon for upgrades and renewals.
     *
     * @since 3.8.11
     *
     * @param string $status      The status output.
     * @param int    $order_id    The order ID.
     * @param string $column_name The column name.
     *
     * @return string
     */
    function edd_sl_filter_order_list_table_status($status, $order_id, $column_name)
    {
    }
    /**
     * Reports
     *
     * @package   EDD-Software-Licensing
     * @copyright Copyright (c) 2020, Sandhills Development, LLC
     * @license   GPL2+
     */
    /**
     * Adds "Renewals" to the log views
     *
     * @access      public
     * @since       2.2
     * @return      void
     */
    function edd_sl_add_log_views($views)
    {
    }
    /**
     * Registers Software Licensing reports with the EDD3.0+ registry.
     *
     * @param EDD\Reports\Data\Report_Registry $reports
     *
     * @since 3.7
     */
    function edd_sl_register_reports($reports)
    {
    }
    /**
     * Fetches the number of license renewals that were processed during this report period.
     *
     * @since 3.7
     * @return int
     */
    function edd_sl_license_renewals_number_report_callback()
    {
    }
    /**
     * Fetches the total earnings from license renewals that were processed during this report period.
     *
     * @since 3.7
     * @return string
     */
    function edd_sl_license_renewal_earnings_report_callback()
    {
    }
    /**
     * Fetches the data for the `software_licensing_renewals` report endpoint.
     *
     * @since 3.7
     * @return array
     */
    function edd_sl_license_renewals_chart_callback()
    {
    }
    /**
     * Get the time zone converted dates for the query.
     * This is a copy of EDD\Reports\get_column_conversion() from EDD 3.1.1.4.
     *
     * @since 3.8.8
     * @param string $column
     * @return string
     */
    function edd_sl_get_column_conversion($column = 'date_created')
    {
    }
    /**
     * Fetches the number of license upgrades that were processed during this report period.
     *
     * @since 3.7
     * @return int
     */
    function edd_sl_license_upgrades_number_report_callback()
    {
    }
    /**
     * Fetches the total earnings from license upgrades that were processed during this report period.
     *
     * @since 3.7
     * @return string
     */
    function edd_sl_license_upgrade_earnings_report_callback()
    {
    }
    /**
     * Fetches the data for the `software_licensing_upgrades` report endpoint.
     *
     * @since 3.7
     * @return array
     */
    function edd_sl_license_upgrades_chart_callback()
    {
    }
    function edd_sl_show_renewal_notices_table()
    {
    }
    function edd_sl_register_license_section($sections)
    {
    }
    /**
     * Registers the Software Licensing license options under the extensions tab.
     * *
     * @access      private
     * @since       1.0
     * @param       $settings array the existing plugin settings
     * @return      array
    */
    function edd_sl_license_settings($settings)
    {
    }
    /**
     * Registers the SL email settings under the emails tab.
     *
     * @since 3.8.5
     * @param array $settings
     * @return array
     */
    function edd_sl_renewal_notices_settings_array($settings)
    {
    }
    /**
     * Displays the renewal notices options
     *
     * @access      public
     * @since       3.0
     * @param 		$args array option arguments
     * @return      void
    */
    function edd_sl_renewal_notices_settings($args)
    {
    }
    /**
     * Renders the add / edit renewal notice screen
     *
     * @since 3.0
     * @param array $input The value inputted in the field
     * @return string $input Sanitizied value
     */
    function edd_sl_license_renewal_notice_edit()
    {
    }
    /**
     * Processes cloning an existing renewal notice
     *
     * @since 3.5
     * @return void
     */
    function edd_sl_process_clone_renewal_notice()
    {
    }
    /**
     * Processes the creation of a new renewal notice
     *
     * @since 3.0
     * @param array $data The post data
     * @return void
     */
    function edd_sl_process_add_renewal_notice($data)
    {
    }
    /**
     * Processes the update of an existing renewal notice
     *
     * @since 3.0
     * @param array $data The post data
     * @return void
     */
    function edd_sl_process_update_renewal_notice($data)
    {
    }
    /**
     * Processes the deletion of an existing renewal notice
     *
     * @since 3.0
     * @param array $data The post data
     * @return void
     */
    function edd_sl_process_delete_renewal_notice($data)
    {
    }
    /**
     * Gets the default text for the renewal notices.
     *
     * @since 3.7
     * @return string
     */
    function edd_sl_get_default_renewal_notice_message()
    {
    }
    /**
     * Registers the Software Licensing upgrades screen.
     *
     * @return void
     */
    function edd_sl_register_upgrades_page()
    {
    }
    /**
     * Hides the upgrades page from the menu.
     *
     * @since 3.8.10
     * @return void
     */
    function edd_sl_hide_upgrades_page()
    {
    }
    function edd_sl_upgrades_screen()
    {
    }
    /**
     * Triggers all upgrade functions
     *
     * @since 2.2
     * @return void
    */
    function edd_sl_show_upgrade_notice()
    {
    }
    function edd_sl_render_licenses_migration()
    {
    }
    // Register all the Batch Processors for the Migration:
    function edd_sl_register_batch_license_migration()
    {
    }
    function edd_sl_include_sl_license_migration_batch_processor($class)
    {
    }
    function edd_sl_register_batch_bundle_license_migration()
    {
    }
    function edd_sl_include_sl_bundle_license_migration_batch_processor($class)
    {
    }
    function edd_sl_register_batch_license_log_migration()
    {
    }
    function edd_sl_include_sl_license_log_migration_batch_processor($class)
    {
    }
    function edd_sl_register_batch_legacy_license_removal()
    {
    }
    function edd_sl_include_sl_legacy_license_removal_batch_processor($class)
    {
    }
    /**
     * Fix an issue that was causing the _edd_sl_activation_count meta from being removed from all licenses when licenses
     * with the meta key defined were deleted.
     *
     * @since 3.6.8
     */
    function edd_sl_render_fix_no_url_check_activation_counts()
    {
    }
    // Register the batch processor for the activation count fix:
    function edd_sl_register_batch_license_activation_count_fix()
    {
    }
    function edd_sl_include_sl_license_activation_count_fix($class)
    {
    }
    /**
     * The main function responsible for returning the one true EDD_Software_Licensing
     * Instance to functions everywhere.
     *
     * Use this function like you would a global variable, except without needing
     * to declare the global.
     *
     * Example: <?php $edd_sl = edd_software_licensing(); ?>
     *
     * @since 1.4
     * @return EDD_Software_Licensing The one true Easy_Digital_Downloads Instance
     */
    function edd_software_licensing()
    {
    }
    /**
     * Prints error messages related to license keys, such as when activating a site
     *
     * @access      private
     * @since       2.7
     * @return      void
    */
    function edd_sl_show_errors()
    {
    }
    /**
     * Outputs EDD SL error messages (when present) to an empty cart.
     *
     * @since 3.7
     * @return void
     */
    function edd_sl_cart_error_messages()
    {
    }
    /**
     * Append beta file download links on the front end when `EDD_Download::get_files` is called
     *
     * @since 3.6
     *
     * @param $files             The existing files on the download
     * @param $download_id       The download ID to get files for
     * @param $variable_price_id The variable price ID supplied (not used for betas)
     *
     * @return array
     */
    function edd_sl_add_beta_files($files, $download_id, $variable_price_id)
    {
    }
    /**
     * Listen for calls to get_post_meta and see if we need to filter them.
     *
     * @since  3.4
     * @param  mixed  $value       The value get_post_meta would return if we don't filter.
     * @param  int    $object_id   The object ID post meta was requested for.
     * @param  string $meta_key    The meta key requested.
     * @param  bool   $single      If the person wants the single value or an array of the value
     * @return mixed               The value to return
     */
    function _eddsl_get_meta_backcompat($value, $object_id, $meta_key, $single)
    {
    }
    /**
     * Listen for calls to add_post_meta and see if we need to filter them.
     *
     * @since  3.4
     * @param mixed   $check       Comes in 'null' but if returned not null, WordPress Core will not interact with the postmeta table
     * @param  int    $object_id   The object ID post meta was requested for.
     * @param  string $meta_key    The meta key requested.
     * @param  mixed  $meta_value  The value get_post_meta would return if we don't filter.
     * @param  bool   $unique      Determines if the meta key should be unique or allow multiple entries for the meta_key
     * @return mixed               Returns 'null' if no action should be taken and WordPress core can continue, or non-null to avoid postmeta
     */
    function _eddsl_add_meta_backcompat($check, $object_id, $meta_key, $meta_value, $unique)
    {
    }
    /**
     * Listen for calls to update_post_meta and see if we need to filter them.
     *
     * @since  3.4
     * @param mixed   $check       Comes in 'null' but if returned not null, WordPress Core will not interact with the postmeta table
     * @param  int    $object_id   The object ID post meta was requested for.
     * @param  string $meta_key    The meta key requested.
     * @param  mixed  $meta_value  The value get_post_meta would return if we don't filter.
     * @param  mixed  $prev_value  The previous value of the meta
     * @return mixed               Returns 'null' if no action should be taken and WordPress core can continue, or non-null to avoid postmeta
     */
    function _eddsl_update_meta_backcompat($check, $object_id, $meta_key, $meta_value, $prev_value)
    {
    }
    /**
     * Listen for calls to update_post_meta and see if we need to filter them.
     *
     * @since  3.4
     * @param mixed   $check       Comes in 'null' but if returned not null, WordPress Core will not interact with the postmeta table
     * @param  int    $object_id   The object ID post meta was requested for.
     * @param  string $meta_key    The meta key requested.
     * @param  mixed  $meta_value  The value get_post_meta would return if we don't filter.
     * @param  mixed  $delete_all  Delete all records found with meta_key
     * @return mixed               Returns 'null' if no action should be taken and WordPress core can continue, or non-null to avoid postmeta
     */
    function _eddsl_delete_meta_backcompat($check, $object_id, $meta_key, $meta_value, $delete_all)
    {
    }
    /**
     * A list of legacy meta_keys to match their properties in the EDD_SL_License object.
     *
     * @since 3.6
     * @return array
     */
    function eddsl_legacy_meta_property_map()
    {
    }
    /**
     * Given a legacy meta_key, get the property name.
     *
     * @since 3.6
     * @param string $legacy_key
     *
     * @return string
     */
    function eddsl_get_property_from_legacy_key($legacy_key = '')
    {
    }
    /**
     * A quick global cache of legacy license IDs and their new license IDs
     *
     * @since 3.6
     * @param $legacy_object_id
     *
     * @return mixed|null|string
     */
    function eddsl_get_new_license_id_from_legacy_id($legacy_object_id)
    {
    }
    function edd_sl_maybe_disable_backwards_compat()
    {
    }
    /**
     * Installation
     *
     * @package   edd-software-licensing
     * @copyright Copyright (c) 2021, Sandhills Development, LLC
     * @license   GPL2+
     * @since     3.8
     */
    /**
     * Installs Software Licensing.
     *
     * @since unknown
     */
    function edd_sl_install()
    {
    }
    /**
     * Processes the Add Site button
     *
     * @since       2.4
     * @return      void
    */
    function edd_sl_process_add_site()
    {
    }
    /**
     * Processes the Deactivate Site button
     *
     * @since       2.4
     * @return      void
    */
    function edd_sl_process_deactivate_site()
    {
    }
    /**
     * Removes the filter that disables quantities on checkout for renewals if the row is a renewal, so that the next
     * row can determine if it needs to show or hide the quantity field.
     *
     * @since 3.5.17
     * @param $item
     * @param $key
     *
     * @return void
     */
    function edd_sl_remove_quantity_filter($item, $key)
    {
    }
    /**
     * When a user is verified after guest purchases, attach the license keys to the user ID.
     *
     * @since 3.6.4
     *
     * @param int   $user_id           The user ID that was verified.
     * @param bool  $update_successful If verification was successful.
     */
    function edd_sl_attach_licenses_to_verified_user($user_id, $update_successful)
    {
    }
    /**
     * Returns if renewals are enabled
     *
     * @return bool True if enabled, false if not
     */
    function edd_sl_renewals_allowed()
    {
    }
    /**
     * Retrieve renewal notices
     *
     * @since 3.0
     * @return array Renewal notice periods
     */
    function edd_sl_get_renewal_notice_periods()
    {
    }
    /**
     * Retrieve the renewal label for a notice
     *
     * @since 3.0
     * @return String
     */
    function edd_sl_get_renewal_notice_period_label($notice_id = 0)
    {
    }
    /**
     * Retrieve a renewal notice
     *
     * @since 3.0
     * @return array Renewal notice details
     */
    function edd_sl_get_renewal_notice($notice_id = 0)
    {
    }
    /**
     * Retrieve renewal notice periods
     *
     * @since 3.0
     * @return array Renewal notices defined in settings
     */
    function edd_sl_get_renewal_notices()
    {
    }
    /**
     * Adds the renewal form to the checkout screen.
     *
     * @since 1.6
     * @return void
     */
    function edd_sl_renewal_form()
    {
    }
    /**
     * Handles the template redirect if renewing a license key.
     *
     * @return void
     */
    function edd_sl_listen_for_renewal_checkout()
    {
    }
    /**
     * Prevent unmatched emails from checkout out
     *
     * @since 3.5
     * @param array $valid_data
     * @param array $posted
     * @return void
     */
    function edd_sl_match_renewal_email($valid_data, $posted)
    {
    }
    /**
     * Maybe adds the license renewal to the cart.
     * On success, redirects to the cart; on failure, redirects to the current page with errors.
     *
     * @since 3.4
     * @param array $data
     * @return void
     */
    function edd_sl_apply_license_renewal($data)
    {
    }
    /**
     * Adds a license key renewal to the cart
     *
     * @since  3.4
     * @param  integer $license_id The ID of the license key to add
     * @param  bool    $by_key     Set to true if passing actual license key as $license_id
     * @return bool|WP_Error $success    True if the renewal was added to the cart, WP_Error is not successful
     */
    function edd_sl_add_renewal_to_cart($license_id = 0, $by_key = \false)
    {
    }
    /**
     * To allow multiple renewals, we need to modify the check for whether an item is in the cart already.
     * Instead of just checking the download ID, we are checking for the license key.
     *
     * @since 3.6.10
     * @param boolean $ret
     * @param integer $download_id
     * @param array   $options
     * @return boolean
     */
    function edd_sl_is_item_in_cart($ret, $download_id, $options)
    {
    }
    /**
     * Check for the cart position of the license being renewed.
     * Replaces edd_get_item_position_in_cart as that checks for the download/price ID,
     * and we need to check for the license ID instead.
     *
     * @param integer $download_id
     * @param array   $options
     * @return integer|boolean
     */
    function edd_sl_get_item_position_in_cart($download_id = 0, $options = array())
    {
    }
    /**
     * Display renewal details inline in cart
     *
     * @since 3.5
     * @param array $item The cart line item
     * @return void
     */
    function edd_sl_renewal_details_cart_item($item)
    {
    }
    /**
     * Given an error status for applying a renewal, redirect accordingly
     *
     * @since  2.3.7
     * @param  integer $error_id The error status code
     * @return void              Executes a redirect to the cart with the proper error message displayed
     */
    function edd_sl_redirect_on_renewal_error($error_id)
    {
    }
    /**
     * Disable core discounts on renewals, if enabled
     *
     * @since  3.5
     * @return void
     */
    function edd_sl_remove_discounts_field()
    {
    }
    /**
     * Prevent adding discounts through direct linking, if enabled
     *
     * @since  3.5
     * @return void
     */
    function edd_sl_disable_url_discounts()
    {
    }
    /**
     * Remove existing discounts if renewal is set
     *
     * @since  3.5
     * @return void
     */
    function edd_sl_remove_discounts()
    {
    }
    /**
     * @since 3.0.2
     * @param $discount float The current discount amount on the item in the cart
     * @param $item array the cart item array
     * @return float
     */
    function edd_sl_cart_details_item_discount($discount, $item)
    {
    }
    /**
     * @since 3.4
     * @param $item array the cart item array
     * @return float
     */
    function edd_sl_get_renewal_discount_amount($item = array(), $license_key = '')
    {
    }
    function edd_sl_cancel_license_renewal()
    {
    }
    /**
     * Removes a license key from the renewal list when the item is removed from the cart
     *
     * @since 3.4
     * @return void
     */
    function edd_sl_remove_key_on_remove_from_cart($cart_key = 0, $item_id = 0)
    {
    }
    function edd_sl_set_renewal_flag($payment_id, $payment_data)
    {
    }
    /**
     * Retrieve the license keys being renewed
     *
     * @since 3.4
     * @return array
     */
    function edd_sl_get_renewal_keys()
    {
    }
    function edd_sl_scheduled_reminders()
    {
    }
    /**
     * Return licenses that expire on the day determined by the period provided.
     *
     * This does not get all licenses between now and the period, but on the day, in the past or future for the period.
     *
     * Example:
     * A period of +1month will get all licenses that expire on the date 30 days from now.
     * A period of -1day will get all licenses that expired yesterday
     *
     * If you want all licenses that expired in a range, you can use the EDD_SL_License_DB class with the following arguments
     * 'expiration' => array(
     *     'start' => <unix timestamp of start date>,
     *     'end'   => <unix timestamp of end date>,
     * )
     *
     * @param string $period This is a PHP pseudo-date string used with `strototime` and can be provided values like
     *                       +1month (default), +2weeks, +1day, +1year, and also supports negative values to look backwards.
     *
     * @return array|bool    If found, it will return an array of license IDs, if none are found, it returns false.
     */
    function edd_sl_get_expiring_licenses($period = '+1month')
    {
    }
    function edd_sl_check_for_expired_licenses()
    {
    }
    function edd_sl_get_renewals_by_date($day = \null, $month = \null, $year = \null, $hour = \null)
    {
    }
    /**
     * Displays the renewal discount row on the cart
     *
     * @since 3.0.2
     * @return void
     */
    function edd_sl_cart_items_renewal_row()
    {
    }
    /**
     * Displays Yes/No if a payment was a renewal
     *
     * @since 3.0.2
     * @return void
     */
    function edd_sl_payment_details_inner($payment_id = 0)
    {
    }
    /**
     * Prevents non-published downloads from sending renewal notices
     *
     * @since 3.4
     * @return bool
     */
    function edd_sl_exclude_non_published_download_renewals($send = \true, $license_id = 0, $notice_id = 0)
    {
    }
    /**
     * Get the discount rate for renewals (as a percentage, eg 40%)
     *
     * @since 3.4
     * @since 3.6.5 Supports returning 0 when a product has renewal discounts disabled.
     * @return int
     */
    function edd_sl_get_renewal_discount_percentage($license_id = 0, $download_id = 0)
    {
    }
    /**
     * Default array of dynamic email strings
     *
     * @return array
     * @since 3.5
     */
    function edd_sl_dynamic_email_strings()
    {
    }
    /**
     * Controls display of dynamic strings on renewal notice form
     *
     * @since 3.5
     */
    function edd_sl_output_dynamic_email_strings()
    {
    }
    /**
     * Get the total cart discount from license renewals.
     *
     * @since 3.5
     * @return int $discount_amount The total discount from all license renewals for the current cart.
     */
    function edd_sl_get_renewal_cart_item_discount_amount()
    {
    }
    /**
     * Process an opt-out of license renewal emails for a license
     *
     * @since 3.5.11
     */
    function edd_sl_process_renewal_email_unsubscribe()
    {
    }
    /**
     * When the cart is emptied, clear out any session data contianing renewals.
     *
     * @since 2.5.19
     * @return void
     */
    function edd_sl_clear_cart_renewal()
    {
    }
    /**
     * Rolls a license expiration date back when refunding a renewal payment.
     *
     * @since 3.6
     *
     * @param EDD_Payment|int $payment Payment object (2.x) or order ID (3.0).
     */
    function edd_sl_rollback_expiration_on_renewal_refund($payment)
    {
    }
    /**
     * Retrieve upgrade paths for a Download
     *
     * @since 3.3
     * @return array
     */
    function edd_sl_get_upgrade_paths($download_id = 0)
    {
    }
    /**
     * Retrieve the details for a specific upgrade path
     *
     * @since 3.3
     * @return array
     */
    function edd_sl_get_upgrade_path($download_id = 0, $upgrade_id = 0)
    {
    }
    /**
     * Retrieve the possible upgrades for a license
     *
     * @since 3.3
     * @return array
     */
    function edd_sl_get_license_upgrades($license_id = 0)
    {
    }
    /**
     * Determine if there are upgrades available for a license
     *
     * @since 3.3
     * @return bool
     */
    function edd_sl_license_has_upgrades($license_id = 0)
    {
    }
    /**
     * Retrieve the upgrade URL for a license
     *
     * @since 3.3
     * @return string
     */
    function edd_sl_get_license_upgrade_url($license_id = 0, $upgrade_id = 0)
    {
    }
    /**
     * Retrieve the cost to upgrade a license
     *
     * @since 3.3
     * @return float
     */
    function edd_sl_get_license_upgrade_cost($license_id = 0, $upgrade_id = 0)
    {
    }
    /**
     * Calculate the prorated cost to upgrade a license
     *
     * Calculations are based on the time remaining on a license instead of a price comparison. To use the price comparison,
     * use `add_filter( 'edd_sl_license_upgrade_pro_rate_simple', '__return_true' );`
     *
     * @since 3.5
     * @param int $license_id ID of license being upgraded
     * @param float|int $old_price Price of the license being upgraded
     * @param float|int $new_price Price of the new license level
     * @param int $upgrade_id ID of the new download
     * @param false|int       Price ID of the new download (for variable products)
     * @return float The prorated cost to upgrade the license
     */
    function edd_sl_get_pro_rated_upgrade_cost($license_id, $old_price, $new_price, $upgrade_id = 0, $price_id = \false)
    {
    }
    /**
     * Calculate the prorated cost based on cost
     *
     * @since 3.5
     * @param int $license_id ID of license being upgraded
     * @param float|int $old_price Price of the license being upgraded
     * @param float|int $new_price Price of the new license level
     * @return float The prorated cost to upgrade the license
     */
    function edd_sl_get_cost_based_pro_rated_upgrade_cost($license_id, $old_price, $new_price)
    {
    }
    /**
     * Calculate the prorated cost based on cost
     *
     * @since 3.5
     * @param int       $license_id ID of license being upgraded
     * @param float|int $old_price  Price of the license being upgraded
     * @param float|int $new_price  Price of the new license level
     * @param int       $upgrade_id ID of the new download
     * @param false|int $price_id   Price ID of the new download (for variable products)
     *
     * @return float The prorated cost to upgrade the license
     */
    function edd_sl_get_time_based_pro_rated_upgrade_cost($license_id, $old_price, $new_price, $upgrade_id = 0, $price_id = \false)
    {
    }
    /**
     * Add license upgrade to the cart
     *
     * @since 3.3
     * @return void
     */
    function edd_sl_add_upgrade_to_cart($data)
    {
    }
    /**
     * Validate license upgrade before permitting purchase to ensure license keys connected to user account can only be upgraded when logged in
     *
     * @since 3.5.4
     * @return void
     */
    function edd_sl_validate_upgrade_in_cart($valid_data, $posted)
    {
    }
    /**
     * @since 3.3
     * @param $price float The current item price
     * @param $download_id int Download product ID
     * @param $options array the cart item options
     * @return float
     */
    function edd_sl_license_upgrade_cart_item_price($price, $download_id, $options)
    {
    }
    /**
     * Adds the license key being upgraded to the cart item title.
     *
     * @param array $item
     * @since 3.7
     */
    function edd_sl_upgrade_details_cart_item($item)
    {
    }
    /**
     * @since 3.3
     * @param $price float The current item price
     * @param $download_id int Download product ID
     * @param $options array the cart item options
     * @return float
     */
    function edd_sl_license_upgrade_cart_item_price_label($label, $download_id, $options)
    {
    }
    /**
     * Do not permit renewals if there is an upgrade in the cart
     *
     * @since 3.3
     * @return bool
     */
    function edd_sl_disable_renewals_on_upgrades($ret)
    {
    }
    /**
     * Process the license upgrade during purchase
     *
     * @since 3.3
     * @return void
     */
    function edd_sl_process_license_upgrade($download_id = 0, $payment_id = 0, $type = 'default', $cart_item = array(), $cart_index = 0)
    {
    }
    /**
     * Displays upgraded to / from indicators
     *
     * @since 3.3
     * @return void
     */
    function edd_sl_payment_details_inner_upgrade_history($payment_id = 0)
    {
    }
    /**
     * Retrieve upgrade count and earnings for specific date
     *
     * @since 3.3
     * @return array
     */
    function edd_sl_get_upgrades_by_date($day = \null, $month = \null, $year = \null, $hour = \null)
    {
    }
    /**
     * Add upgrade links to product lists
     *
     * @since 3.5
     * @param  int   $download_id The ID of a given download
     * @param  array $args Arguements passed by the download
     * @return array
     */
    function edd_sl_add_upgrade_link($download_id, $args)
    {
    }
    /**
     * Given a license ID, determine the URL to get to a license upgrade list
     *
     * @since 3.5
     * @param int $license_id The license ID to get an upgrade list url for
     * @return string         A fully qualified URL to the page where a user can upgrade their license, or empty if failure
     */
    function edd_sl_get_license_upgrade_list_url($license_id = 0)
    {
    }
    /**
     * After a payment has been marked as complete, check to see if it was an upgrade or renewal and add appropriate license meta.
     *
     * @since 3.6
     *
     * @param $payment_id
     * @param $payment
     * @param $customer
     */
    function edd_sl_set_upgrade_renewal_dates($payment_id, $payment, $customer)
    {
    }
    /**
     * Listen for calls to get_post_meta and see if we need to filter them.
     *
     * @since  3.4.8
     * @param  mixed  $value       The value get_post_meta would return if we don't filter.
     * @param  int    $object_id   The object ID post meta was requested for.
     * @param  string $meta_key    The meta key requested.
     * @param  bool   $single      If the person wants the single value or an array of the value
     * @return mixed               The value to return
     */
    function edd_sl_get_meta_backcompat($value, $object_id, $meta_key, $single)
    {
    }
    /**
     * Stores the payment IDs that are created during the migration to custom tables in Version 3.6
     *
     * @since 3.6
     *
     * @param $payment_id
     * @param $payment_data
     */
    function _eddsl_migration_log_payment_ids($payment_id, $payment_object)
    {
    }
    /**
     * Returns an array of platforms that can be used with a product's requirements.
     *
     * @since 3.8
     *
     * @return array Filtered array of required platforms.
     */
    function edd_sl_get_platforms()
    {
    }
    /**
     * Gets the license length for a download.
     *
     * @since 3.7.3
     * @param int         $download_id The download ID.
     * @param boolean|int $price_id    The price ID for the download (optional).
     *
     * @return string  Returns "lifetime" or a PHP time string.
     */
    function edd_sl_get_product_license_length($download_id, $price_id = \false)
    {
    }
    /** Internal Functions only: Not for 3rd party use. */
    /**
     * This is not a true background processor, but something to initially help us clean up the '_edd_sl_legacy_id' license meta.
     *
     * Note: We're using the wp_schedule_single_event here to avoid having a forever running cron event that's scheduled. This way
     * once we are done processing all the legacy license meta, the cron event will just not be re-scheduled.
     *
     * Once the first EDD daily events cron runs after the update, we check if we've already scheduled a single cleanup, if not we check
     * if there is any legacy meta to remove, and if there is, we schedule a single event in 10 minutes.
     *
     * @since 3.8.8
     */
    function _edd_sl_schedule_cleanup_legacy_ids()
    {
    }
    /**
     * Process on the 'one time' events to clean up the '_edd_sl_legacy_id' license meta.
     *
     * We're doing 100 at a time here in order to ensure that we don't overrun the Databsae or Cache services.
     *
     * After we process 100 rows to delete, we'll go ahead and schedule another event in 10 minutes to process the next 100.
     *
     * @since 3.8.8
     */
    function _edd_sl_cleanup_legacy_ids()
    {
    }
    /**
     * When the legacy ID cleanup process is complete, do some house keeping.
     *
     * Marks the sl_remove_legacy_license_id_meta upgrade as complete, dismisses the initial notification about
     * the process running, and then adds a new notification about the process being complete.
     *
     * @since 3.8.8
     *
     * @param bool $add_notification If we should add the notification to the database, defaults to true.
     */
    function _edd_sl_legacy_ids_cleanup_complete($add_notification = \true)
    {
    }
    /**
     * In the event SL is installed a version of EDD that doesn't support local notifications (lower than 3.1.1) show admin notices.
     *
     * @since 3.8.8
     */
    function _edd_sl_legacy_ids_cleanup_admin_notices()
    {
    }
    /**
     * Possibly loads the EDD Notifications Class.
     *
     * @since 3.8.8
     *
     * @return bool|EDD\Database\NotificationsDB False if the installation does not support the maybe_add_local_notification method, or the NotificationsDB class.
     */
    function _edd_sl_edd_notifications()
    {
    }
    /**
     * Masks the output a license key.
     *
     * By default this will replace all but the last 6 characters with a *.
     *
     * The mask length can be filtered using the `edd_sl_mask_license_key_length` filter.
     * The mask character can be filtered using the `edd_sl_mask_license_key_character` filter.
     *
     * @since 3.8.11
     *
     * @param string $license_key The license key to mask.
     *
     * @return string The masked license key.
     */
    function edd_sl_mask_license_key($license_key)
    {
    }
    /**
     * Setup License Key Post Type
     *
     * Setup the License Log Post Type
     *
     * Registers the License Key CPT.
     *
     * @access      private
     * @since       1.0
     * @return      void
    */
    function edd_sl_setup_post_type()
    {
    }
    /**
     * Registers the thumbnail sizes for the plugins, so they can be used in the updater icons array.
     *
     * @since 3.6.5
     *
     * @return void
     */
    function edd_sl_register_thumbnail_sizes()
    {
    }
    /**
     * Download Columns
     *
     * Defines the custom columns and their order
     *
     * @since 1.6
     * @param array $download_columns Array of download columns
     * @return array $download_columns Updated array of download columns for Downloads
     *  Post Type List Table
     */
    function edd_sl_download_columns($download_columns)
    {
    }
    /**
     * Render Download Columns
     *
     * @since 1.6
     * @param string $column_name Column name
     * @param int $post_id Download (Post) ID
     * @return void
     */
    function edd_sl_render_download_columns($column_name, $post_id)
    {
    }
    /**
     * Parse the ReadMe URL
     *
     * @since  2.4
     *
     * @param  string $url URL of the readme.txt file
     *
     * @return array|bool  Processed readme.txt
     */
    function _edd_sl_readme_parse($url = '')
    {
    }
    /**
     * Fetch the readme.txt data from cache or fresh.
     *
     * Use `cache` query string to force a fresh download of the readme.
     *
     * @since  2.4
     * @uses   _edd_sl_readme_parse()    Process the readme data
     *
     * @param  string $readme_url URL of the readme.
     *
     * @return boolean|array             False if not exists, array of data if exists.
     */
    function _edd_sl_get_readme_data($readme_url = '', $post_id = \null)
    {
    }
    /**
     * Tap into the filter to use data from a readme.txt file
     *
     * @since  2.4
     * @since  3.5 Added $download_beta parameter
     * @see    EDD_Software_Licensing::get_latest_version_remote()
     *
     * @param  array   $original_response License response array
     * @param  WP_Post $download          Post object of the Download item
     * @param  bool    $download_beta     If true, the current request is asking for a beta version
     *
     * @return array                    Modified array, if readme exists. Otherwise, original array is returned.
     */
    function edd_sl_readme_modify_license_response($original_response = array(), $download = \null, $download_beta = \false)
    {
    }
    /**
     * Get the custom homepage for the download. If not set, return download item URL.
     *
     * @since  2.4
     *
     * @param  int $download_id Download ID
     *
     * @return string              URL of download.
     */
    function edd_sl_readme_get_download_homepage($download_id)
    {
    }
    /**
     * Get an array of banner images.
     *
     * The array can be empty; WordPress will check whether it is set in wp-admin/includes/plugin-install.php
     * The banner image URLs are sanitized on WordPress' end
     *
     * @param int     $download_id Download ID
     * @param boolean $serialize   Whether to serialize the banner array, which is required for backward compatibility with
     *                             earlier EDDSL versions
     *
     * @return array Banners array with `high` and `low` keys with banner image URLs for the download, if set
     */
    function edd_sl_readme_get_download_banners($download_id, $serialize = \true)
    {
    }
    /**
     * The readme.txt files are cached. This outputs the cache status and a button to clear the cache.
     */
    function edd_sl_render_readme_cache_status()
    {
    }
    /**
     * Delete the readme transient via ajax.
     *
     * @since 3.7
     * @return void
     */
    function edd_sl_delete_readme_transient()
    {
    }
    /**
     * Get the cache key for the cached readme
     *
     * @param  int $post_id The ID of the download
     *
     * @return string          Transient key
     */
    function _edd_sl_readme_get_transient_key($post_id = \null)
    {
    }
    /**
     * Verify that a string is structured as an URL.
     *
     * It checks if after parsing the URL that the `scheme` and `host` keys are set
     * and that the scheme is either `http` or `https`.
     *
     * @param  string $url String to check
     *
     * @return boolean         True: URL is valid, False: URL is not valid.
     */
    function edd_sl_is_valid_readme_url($url)
    {
    }
    function edd_sl_products_product_api($product)
    {
    }
    /**
     * Add license data to EDD API sales endpoint
     *
     * @since  3.5
     * @param  array $sales   The current sales data
     * @return array $sales   The modified sales data
     */
    function edd_sl_sales_api($sales)
    {
    }
    /**
     * Enqueue admin scripts
     *
     * @since 2.6
     */
    function edd_sl_admin_scripts()
    {
    }
    /**
     * Enqueue frontend scripts
     *
     * @since 3.2
     */
    function edd_sl_scripts()
    {
    }
    /**
     * Output the SL JavaScript for the checkout page
     *
     * @param boolean $force Optional parameter to allow the script within the shortcode.
     * @since  3.2
     * @return void
     */
    function edd_sl_checkout_js($force = \false)
    {
    }
    function edd_sl_load_edd_admin_scripts($should_load, $hook)
    {
    }
    /**
     * Displays a history of all license keys for a customer
     *
     * @since 3.4
     */
    function edd_sl_license_keys($atts = array(), $content = array())
    {
    }
    /**
     * Registers the [edd_renewal_form] shortcode to show the
     * renewal form.
     *
     * @return string
     * @since 3.7
     */
    function edd_sl_show_renewal_shortcode()
    {
    }
    /**
     * Staged Rollouts
     *
     * @package   edd-software-licensing
     * @copyright Copyright (c) 2021, Sandhills Development, LLC
     * @license   GPL2+
     * @since     3.8
     */
    /**
     * Process staged rollouts for user when edd_sl_license_response is called
     *
     * @since 3.8
     *
     * @param array           $response      Response.
     * @param EDD_SL_Download $download      Download object.
     * @param bool            $download_beta Whether there is a beta download available.
     * @param array           $data          Request data sent to check the item.
     *
     * @return array
     */
    function edd_sl_staged_rollouts($response, $download, $download_beta, $data)
    {
    }
    /**
     * Generates a random number between 1 and 100 for a given string (likely
     * a license key + URL combination).
     *
     * @since 3.8
     *
     * @param string $identifier
     *
     * @return int
     */
    function edd_sl_generate_number_for_string($identifier)
    {
    }
    function edd_sl_add_key_column()
    {
    }
    /**
     * Displays a Manage Licenses link in purchase history
     *
     * @since 2.7
     * @param \EDD\Orders\Order|int   $order_or_order_id In EDD 3.0, this is the order object; in 2.x, it is the payment ID.
     * @param array                   $purchase_data     The array of purchase data (not used in EDD 3.0).
     */
    function edd_sl_site_management_links($order_or_order_id, $purchase_data = array())
    {
    }
    /**
     * Adds the license keys link to the order history block.
     *
     * @param \EDD\Orders\Order $order
     * @return void
     */
    function edd_sl_blocks_management_links($order)
    {
    }
    /**
     * Override the content of the purchase history page to show our license management UI
     *
     * @param string $content
     *
     * @since 2.7
     *
     * @return string
     */
    function edd_sl_override_history_content($content)
    {
    }
    /**
     * Override template parts to show our license management UI
     *
     * @link https://github.com/easydigitaldownloads/EDD-Software-Licensing/issues/1517
     *
     * @param array       $templates Template stack.
     * @param string      $slug      Template slug.
     * @param string|null $name      Optional. Template name.
     *
     * @since 3.7.1
     * @return array
     */
    function edd_sl_override_template_part($templates, $slug, $name)
    {
    }
    /**
     * Adds our templates dir to the EDD template stack
     *
     * @since 2.7
     */
    function edd_sl_add_template_stack($paths)
    {
    }
    /**
     * Display license keys on the [edd_receipt] short code
     *
     * @access      private
     * @since       1.3.6
     * @param \EDD\Orders\Order|EDD_Payment $order_or_payment Order (EDD 3.0) or payment (2.x) object.
     * @param array                         $edd_receipt_args Receipt arguments.
     * @return      void
     */
    function edd_sl_show_keys_on_receipt($order_or_payment, $edd_receipt_args)
    {
    }
    /**
     * Adds license keys to the EDD Receipt block.
     *
     * @param \EDD\Orders\Order $order
     * @return void
     */
    function edd_sl_show_keys_on_block_receipt($order)
    {
    }
    /**
     * Hide download links for expired licenses on purchase receipt page
     *
     * @since       2.3
     * @since       3.6 - Updated to use EDD_Software_Licensing->license_can_download to support multiple licenses for same ID
     *
     * @param       bool $show If we should show or hide the links to download on the purchase receipt
     * @param       int  $item The Item ID that was purchased (download ID)
     * @param       array $receipt_args Array of arguments for the item, of which we use `id` for the Payment/Order ID
     *
     * @return      bool
     */
    function edd_sl_hide_downloads_on_expired($show, $item, $receipt_args)
    {
    }
    /**
     * Register the widgets.
     */
    function edd_sl_register_widgets()
    {
    }
}