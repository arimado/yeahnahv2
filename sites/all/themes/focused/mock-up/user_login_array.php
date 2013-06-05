
<?php
Array
(
    [form] => Array
        (
            [#validate] => Array
                (
                    [0] => user_login_name_validate
                    [1] => user_login_authenticate_validate
                    [2] => user_login_final_validate
                )

            [#form_id] => user_login
            [#type] => form
            [#build_id] => form-FkIeC6VM7TAM8QtdpSakljlMjom8e-teQAluprgz_8o
            [#id] => user-login
            [#method] => post
            [#action] => /user
            [#theme_wrappers] => Array
                (
                    [0] => form
                    [1] => block
                )

            [#tree] => 
            [#parents] => Array
                (
                )

            [#submit] => Array
                (
                    [0] => user_login_submit
                )

            [#theme] => Array
                (
                    [0] => user_login
                )

            [#processed] => 
            [#defaults_loaded] => 1
            [#required] => 
            [#attributes] => Array
                (
                )

            [#title_display] => before
            [#array_parents] => Array
                (
                )

            [#block] => stdClass Object
                (
                    [bid] => 258
                    [module] => system
                    [delta] => main
                    [theme] => focused
                    [status] => 1
                    [weight] => -27
                    [region] => content
                    [custom] => 0
                    [visibility] => 0
                    [pages] => 
                    [title] => 
                    [cache] => -1
                    [subject] => 
                )

            [#weight] => 1
            [name] => Array
                (
                    [#type] => textfield
                    [#title] => Username
                    [#size] => 60
                    [#maxlength] => 60
                    [#required] => 1
                    [#description] => Enter your YEAHNAH. username.
                    [#input] => 1
                    [#autocomplete_path] => 
                    [#process] => Array
                        (
                            [0] => ajax_process_form
                        )

                    [#theme] => textfield
                    [#theme_wrappers] => Array
                        (
                            [0] => form_element
                        )

                    [#pre_render] => Array
                        (
                            [0] => ctools_dependent_pre_render
                        )

                    [#defaults_loaded] => 1
                    [#tree] => 
                    [#parents] => Array
                        (
                            [0] => name
                        )

                    [#array_parents] => Array
                        (
                            [0] => name
                        )

                    [#weight] => 0
                    [#processed] => 1
                    [#attributes] => Array
                        (
                        )

                    [#title_display] => before
                    [#id] => edit-name
                    [#name] => name
                    [#value] => 
                    [#ajax_processed] => 
                    [#sorted] => 1
                )

            [pass] => Array
                (
                    [#type] => password
                    [#title] => Password
                    [#description] => Enter the password that accompanies your username.
                    [#required] => 1
                    [#input] => 1
                    [#size] => 60
                    [#maxlength] => 128
                    [#process] => Array
                        (
                            [0] => ajax_process_form
                        )

                    [#theme] => password
                    [#theme_wrappers] => Array
                        (
                            [0] => form_element
                        )

                    [#defaults_loaded] => 1
                    [#tree] => 
                    [#parents] => Array
                        (
                            [0] => pass
                        )

                    [#array_parents] => Array
                        (
                            [0] => pass
                        )

                    [#weight] => 0.001
                    [#processed] => 1
                    [#attributes] => Array
                        (
                        )

                    [#title_display] => before
                    [#id] => edit-pass
                    [#name] => pass
                    [#value] => 
                    [#ajax_processed] => 
                    [#sorted] => 1
                )

            [form_build_id] => Array
                (
                    [#type] => hidden
                    [#value] => form-FkIeC6VM7TAM8QtdpSakljlMjom8e-teQAluprgz_8o
                    [#id] => form-FkIeC6VM7TAM8QtdpSakljlMjom8e-teQAluprgz_8o
                    [#name] => form_build_id
                    [#parents] => Array
                        (
                            [0] => form_build_id
                        )

                    [#input] => 1
                    [#process] => Array
                        (
                            [0] => ajax_process_form
                        )

                    [#theme] => hidden
                    [#defaults_loaded] => 1
                    [#tree] => 
                    [#array_parents] => Array
                        (
                            [0] => form_build_id
                        )

                    [#weight] => 0.003
                    [#processed] => 1
                    [#required] => 
                    [#attributes] => Array
                        (
                        )

                    [#title_display] => before
                    [#ajax_processed] => 
                    [#sorted] => 1
                )

            [form_id] => Array
                (
                    [#type] => hidden
                    [#value] => user_login
                    [#id] => edit-user-login
                    [#parents] => Array
                        (
                            [0] => form_id
                        )

                    [#input] => 1
                    [#process] => Array
                        (
                            [0] => ajax_process_form
                        )

                    [#theme] => hidden
                    [#defaults_loaded] => 1
                    [#tree] => 
                    [#array_parents] => Array
                        (
                            [0] => form_id
                        )

                    [#weight] => 0.004
                    [#processed] => 1
                    [#required] => 
                    [#attributes] => Array
                        (
                        )

                    [#title_display] => before
                    [#name] => form_id
                    [#ajax_processed] => 
                    [#sorted] => 1
                )

            [actions] => Array
                (
                    [#type] => actions
                    [submit] => Array
                        (
                            [#type] => submit
                            [#value] => Log in
                            [#input] => 1
                            [#name] => op
                            [#button_type] => submit
                            [#executes_submit_callback] => 1
                            [#limit_validation_errors] => 
                            [#process] => Array
                                (
                                    [0] => ajax_process_form
                                )

                            [#theme_wrappers] => Array
                                (
                                    [0] => button
                                )

                            [#defaults_loaded] => 1
                            [#tree] => 
                            [#parents] => Array
                                (
                                    [0] => submit
                                )

                            [#array_parents] => Array
                                (
                                    [0] => actions
                                    [1] => submit
                                )

                            [#weight] => 0
                            [#processed] => 1
                            [#required] => 
                            [#attributes] => Array
                                (
                                )

                            [#title_display] => before
                            [#id] => edit-submit
                            [#ajax_processed] => 
                            [#sorted] => 1
                        )

                    [#theme_wrappers] => Array
                        (
                            [0] => container
                        )

                    [#process] => Array
                        (
                            [0] => form_process_actions
                            [1] => form_process_container
                        )

                    [#weight] => 100
                    [#defaults_loaded] => 1
                    [#tree] => 
                    [#parents] => Array
                        (
                            [0] => actions
                        )

                    [#array_parents] => Array
                        (
                            [0] => actions
                        )

                    [#processed] => 1
                    [#required] => 
                    [#attributes] => Array
                        (
                            [class] => Array
                                (
                                    [0] => form-actions
                                )

                        )

                    [#title_display] => before
                    [#id] => edit-actions
                    [#sorted] => 1
                )

            [#sorted] => 1
            [#children] => 
        )

    [attributes_array] => Array
        (
            [data-thmr] => thmr_60
        )

    [theme_hook_suggestions] => Array
        (
        )

    [zebra] => odd
    [id] => 1
    [directory] => sites/all/themes/focused
    [classes_array] => Array
        (
            [0] => user-login
        )

    [title_attributes_array] => Array
        (
        )

    [content_attributes_array] => Array
        (
        )

    [title_prefix] => Array
        (
        )

    [title_suffix] => Array
        (
        )

    [user] => stdClass Object
        (
            [uid] => 0
            [hostname] => 127.0.0.1
            [roles] => Array
                (
                    [1] => anonymous user
                )

            [cache] => 0
        )

    [db_is_active] => 1
    [is_admin] => 
    [logged_in] => 
    [is_front] => 
)
                
                ?>