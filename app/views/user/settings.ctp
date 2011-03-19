<?php
/**
 * Tatoeba Project, free collaborative creation of multilingual corpuses project
 * Copyright (C) 2011  HO Ngoc Phuong Trang <tranglich@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 *
 * @category PHP
 * @package  Tatoeba
 * @author   HO Ngoc Phuong Trang <tranglich@gmail.com>
 * @license  Affero General Public License
 * @link     http://tatoeba.org
 */
?>
<div id="annexe_content">
    <?php
        echo $this->element(
        'users_menu', 
        array('username' => CurrentUser::get('username'))
    );
    ?>
</div>

<div id="main_content">
    <div class="module">
        <h2><?php __('Options'); ?></h2>
        
        <?php
        $notifChecked = array();
        if ($settings['send_notifications']) {
            $notifChecked = array('checked' => 'checked');
        }
        $isPublicChecked = array();
        if ($settings['is_public']) {
            $isPublicChecked = array('checked' => 'checked');
        }
        
        echo $form->create(
            null, 
            array(
                'controller' => 'user',
                'action' => 'save_settings'
            )
        );
        ?>
        
        <div>
            <?php echo $form->checkbox('send_notifications', $notifChecked); ?>
            <label for="SendNotifications">
                <?php __('Email notifications'); ?>
            </label>
        </div>
        
        <div>
            <?php echo $form->checkbox('is_public', $isPublicChecked); ?>
            <label for="PublicProfile">
                <?php __('Set your profile public?'); ?>
            </label>
        </div>
        
        <?php echo $form->end(__('Save', true)); ?>
    </div>
    
    <div class="module">
        <h2><?php __('Change email'); ?></h2>
        <?php
        echo $form->create(
            'User',
            array(
                'url' => array(
                    'controller' => 'user',
                    'action' => 'save_email'
                )
            )
        );
        echo $form->input(
            'email',
            array(
                'label' => __('Email', true),
                'value' => $settings['email']
            )
        );
        echo $form->end(__('Save', true));
        ?>
    </div>
    
    <div class="module">
        <h2><?php __('Change password'); ?></h2>
        <?php
        echo $form->create(
            'User',
            array(
                'url' => array(
                    'controller' => 'user',
                    'action' => 'save_password'
                )
            )
        );
        echo $form->input(
            'old_password',
            array(
                "label" => __('Old password', true),
                "type" => "password"
            )
        );
        echo $form->input(
            'new_password',
            array(
                "label" => __('New password', true),
                "type" => "password"
            )
        );
        echo $form->input(
            'new_password2',
            array(
                "label" => __('New password again', true),
                "type" => "password"
            )
        );
        echo $form->end(__('Save', true));
        ?>
    </div>
</div>