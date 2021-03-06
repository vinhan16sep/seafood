<?php

if (!function_exists('handle_multi_language_request')) {
    /**
     * @param $foreign_key - name of foreign key column
     * @param $id - id of inserted item
     * @param $request_language_template - columns of language table, except foreign key and language column
     * @param $request - form request
     * @param $languages - array of languages use on project
     * @return array
     */
    function handle_multi_language_request($foreign_key, $id, $request_language_template, $request, $languages) {
        $list_request = array_keys($request);
        $converted_request = array();

        for ($i = 0; $i < count($languages); $i++) {
            $converted_request[$i] = array($foreign_key => $id, 'language' => $languages[$i]);
            for ($j = 0; $j < count($list_request); $j++) {
                $language_type = explode('_', $list_request[$j]);
                if (count($language_type) == 2) {
                    if (in_array($language_type[0], $request_language_template)) {
                        if ($language_type[1] == $languages[$i]) {
                            $converted_request[$i][$language_type[0]] = $request[$list_request[$j]];
                        }
                    }
                }
            }
        }
        return $converted_request;
    }
}

if (!function_exists('handle_common_author_data')) {
    /**
     * @return array
     */
    function handle_author_common_data() {
        $CI =& get_instance();
        $CI->load->library('ion_auth');

        date_default_timezone_set('Asia/Ho_Chi_Minh');

        return array(
            'created_at' => date('Y-m-d H:i:s', now()),
            'created_by' => $CI->ion_auth->user()->row()->username,
            'updated_at' => date('Y-m-d H:i:s', now()),
            'updated_by' => $CI->ion_auth->user()->row()->username
        );
    }
}