<?php
/**
 * Tatoeba Project, free collaborative creation of multilingual corpuses project
 * Copyright (C) 2009  HO Ngoc Phuong Trang <tranglich@gmail.com>
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

$this->set('title_for_layout', $this->Pages->formatTitle(__('Help')));
?>

<div id="annexe_content">
    <div class="module">
        <h2><?php echo __('Need more help?'); ?></h2>
        <p>
        <?php
        echo format(
            __('You can check out the <a href="{}">FAQ</a>.'),
            $this->Html->url(array('controller' => 'pages', 'action' => 'faq'))
        );
        ?>
        </p>
        <p><?php
           echo __(
               'If you cannot find the answer to your question, do not hesitate '.
               'to contact us.'
           );
           ?>
        </p>
    </div>

    <div class="module">
        <h2><?php echo __('Contact us'); ?></h2>
        <dl>
            <dt><?php echo __('By email'); ?></dt>
            <dd>team@tatoeba.org</dd>
            <dt><?php echo __('From the Wall'); ?></dt>
            <dd>
            <?php
            echo $this->Html->link(
                __('Click here to go to the Wall.'),
                array("controller"=>"wall")
            );
            ?>
            </dd>
            <dt><?php echo __('On IRC'); ?></dt>
            <dd>irc://freenode/tatoeba</dd>
        </dl>
    </div>

    <div class="module">
        <h2><?php echo __('How to use IRC'); ?></h2>
        <p>
        <?php
        echo __(
            'For those who are not familiar with IRC, it is pretty much like an '.
            'instant messenger. You will be able to talk to us in real time, '.
            'if we are there.'
        );
        ?>
        </p>
        <p>
        <?php echo __('There are many ways to join our channel. One is to go to this website:');
        ?>
        <a href="http://webchat.freenode.net/">http://webchat.freenode.net/</a>
        </p>
        <?php
        echo __(
            'Enter a nickname, enter "#tatoeba" for the channel, and click '.
            'on "connect". That\'s it!'
        );
        ?>
    </div>
</div>

<div id="main_content">

    <?php
    if ($this->Session->read('Auth.User.id')) {
        ?>
        <div class="module">
            <h2><?php echo __('Getting started'); ?></h2>


            <p>
            <?php
            echo format(
                __(
                    'If you have no idea what to do now that you are registered, '.
                    'you can introduce yourself on the <a href="{}">Wall</a>, or '.
                    'join us on <strong>IRC</strong>. We will give you a purpose. :)',
                    true
                ),
                $this->Html->url(array('controller' => 'wall'))
            );
            ?>
            </p>
            <p>
            <?php
            echo __(
                'If you think this project is awesome and would like to help '.
                'actively, here is a link you <strong>MUST</strong> read:'
            );
            ?>
            <a href="http://blog.tatoeba.org/2010/02/how-to-be-good-contributor-in-tatoeba.html">
            http://blog.tatoeba.org/2010/02/how-to-be-good-contributor-in-tatoeba.html
            </a>
            </p>

            <p>
            <?php
                echo __(
                    "That being said, welcome to Tatoeba! We hope you'll enjoy being ".
                    "part of this project :)"
                );
            ?>
            </p>
        </div>
        <?php
    }
    ?>


    <div class="module">
        <h2><?php echo __('Important links'); ?></h2>
        <ul>
            <li>
                <a href="http://blog.tatoeba.org/2010/02/how-to-be-good-contributor-in-tatoeba.html">
                How to be a good contributor in Tatoeba</a>, by Trang
            </li>
            <li>
                <a href="http://a4esl.com/temporary/tatoeba/info.html">Tatoeba.org: What You Can Do and How to Do It</a>, by CK
            </li>
            <li>
                <a href="http://blog.tatoeba.org/2010/08/submission-policy-what-kind-of-content.html">Submission policies - What kind of content do we want?</a>, by Trang
            </li>
            <li>
                <a href="http://blog.tatoeba.org/2010/05/moderators-in-tatoeba.html">Moderators in Tatoeba</a>, by Trang
            </li>
            <li>
                <a href="http://blog.tatoeba.org/2010/09/warning-you-are-being-disrespectful.html">Warning: you are being disrespectful</a>, by Trang
            </li>
        </ul>
    </div>

    <div class="module">
        <h2><?php echo __('Adding new sentences'); ?></h2>
        <p><?php echo __('There are two ways to add new sentences.'); ?></p>
        <ul>
            <li>
                <?php
                echo format(
                    __('From the <a href="{}">Contribute</a> section'),
                    $this->Html->url(
                        array(
                            'controller' => 'pages',
                            'action' => 'contribute'
                        )
                    )
                );
                ?>
            </li>
            <li>
                <?php
                echo format(
                    __(
                        'By creating a new <a href="{}">list</a>, and going to '.
                        'the edit page for that list.', true
                    ),
                    $this->Html->url(
                        array(
                            'controller' => 'sentences_lists',
                            'action' => 'index'
                        )
                    )
                );
                ?>
            </li>
        </ul>

        <p>
            <?php
            echo __(
                'Even though there are many sentences in Tatoeba, there '.
                'is still a lot of vocabulary that is not covered. This is why '.
                'we encourage you to add new sentences with new vocabulary, even '.
                'if you do not know how to translate it into any language.'
            );
            ?>
        </p>
    </div>


    <div class="module">
        <h2><?php echo __('Translating sentences'); ?></h2>
        <p>
            <?php
            echo __(
                'Translating is one of the most important tasks in Tatoeba, since '.
                'the main goal of the project is to gather sentences translated '.
                'into many languages.'
            );
            ?>
        </p>
        <p>
            <?php
            echo format(
                __(
                    'You can translate a sentence from pretty much everywhere. '.
                    'Just click on this icon {translateButton} whenever you see it.', true
                ),
                array('translateButton' => $this->Html->image(IMG_PATH . 'translate.svg', array('height' => 16)))
            );
            '';
            ?>
        </p>
    </div>


    <div class="module">
        <h2><?php echo __('Correcting mistakes'); ?></h2>
        <p>
            <?php
            echo __(
                'You can only correct mistakes in sentences that belong to you. '.
                'If you see a mistake in someone else\'s sentence, you can '.
                'post a comment to notify him or her of the mistake.'
            );
            ?>
        </p>
        <p>
            <?php
            echo __(
                'In certain cases, the sentence does not have an owner. Read the '.
                'paragraph below (on adopting sentences) to learn more.'
            );
            ?>
        </p>
    </div>


    <div class="module">
        <h2><?php echo __('Adopting sentences'); ?></h2>
        <p>
            <?php
            echo __(
                'When you add a sentence, this sentence "belongs" to you - only '.
                'you can edit it. However, many of the sentences in Tatoeba come '.
                'from a Japanese-English corpus called the Tanaka Corpus. '.
                'These sentences do not have any owner because they have been '.
                'collected outside of Tatoeba.'
            );
            ?>
        </p>
        <p>
            <?php
            echo format(
                __(
                    'If you see a mistake in an "orphan" sentence, you will '.
                    'not be able to correct it because you are not the owner. '.
                    'This is why there is an "adopt" option ({adoptButton}). Once you '.
                    'adopt a sentence, you become its owner and therefore can '.
                    'edit it.', true
                ),
                array('adoptButton' => $this->Html->image(
                    IMG_PATH . 'unadopted.svg',
                    array(
                        'height' => 16
                    )
                ))
            );
            ?>
        </p>
        <p>
            <?php
            echo __(
                'Adopting a sentence is also part of the "quality process". '.
                'You can find more information about it here:'
            );
            ?>
            <a href="http://blog.tatoeba.org/2009/01/new-validation-system.html">
                http://blog.tatoeba.org/2009/01/new-validation-system.html
            </a>
        </p>
    </div>


    <div id="sentences_lists_help" class="module">
        <h2><?php echo __('Sentence lists'); ?></h2>
        <p>
            <?php
            echo __(
                'You can create lists of sentences in Tatoeba. By default the list '.
                'is <strong>personal</strong>, which means it can only be edited by '.
                'the person who created it (but it is still visible to everyone).'
            );
            ?>
        </p>
        <p>
            <?php
            echo __(
                'However it is also possible to let any member in Tatoeba add and '.
                'remove sentences by setting a list as <strong>collaborative</strong>.'
            );
            ?>
        </p>
    </div>
</div>
