<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request;

/**
 * ExportDeclaration Interface.
 */
interface ExportDeclarationInterface
{
    /**
     * @return float
     */
    public function getDestinationPort();

    /**
     * @return string
     */
    public function getExporterCode();

    /**
     * @return string
     */
    public function getExporterID();

    /**
     * @return string
     */
    public function getExporterLicense();

    /**
     * @return array
     */
    public function getExportLineItems();


}
