<?php
use Cake\Core\Configure;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $template->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $template->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Templates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="templates form large-9 medium-8 columns content">
    <?= $this->Form->create($template) ?>
    <fieldset>
        <legend><?= __('Edit Template') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('active');
            echo $this->Html->tag('h3', __('en (default)'));
            echo $this->Form->input('subject');
            echo $this->Form->input('body');
            $locales = Configure::read('availableLocales');
            foreach ($locales as $locale) {
                echo $this->Html->tag('h3', h($locale));
                echo $this->Form->input("_translations.$locale.subject", ['label' => __('Subject')]);
                echo $this->Form->input("_translations.$locale.body", ['label' => __('Body')]);
            }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
