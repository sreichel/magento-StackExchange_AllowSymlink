<?php

/**
 * System config symlink backend model
 *
 * @category Mage
 * @package  Mage_Adminhtml
 */
class Sr_AllowSymlink_Model_System_Config_Backend_Symlink extends Mage_Core_Model_Config_Data
{
    /**
     * Removed save() method returning just $this and prevents enabling symlinks.
     *
     * @see Mage_Adminhtml_Model_System_Config_Backend_Symlink::save()
     * @since 1.9.3.4 (SUPEE-9767v2)
     */
}
