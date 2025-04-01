<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerFeature\Yves\SspServiceManagement;

use Spryker\Yves\Kernel\AbstractBundleConfig;

/**
 * @method \SprykerFeature\Shared\SspServiceManagement\SspServiceManagementConfig getSharedConfig()
 */
class SspServiceManagementConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @var string
     */
    public const SHIPMENT_TYPE_ON_SITE_SERVICE = 'on-site-service';

    /**
     * @api
     *
     * @uses \Spryker\Shared\ShipmentType\ShipmentTypeConfig::SHIPMENT_TYPE_DELIVERY
     *
     * @var string
     */
    public const SHIPMENT_TYPE_DELIVERY = 'delivery';

    /**
     * @var string
     */
    protected const TEMPLATE_PATH_SERVICE_POINT_WIDGET_CONTENT = '@SspServiceManagement/views/service-point-widget-content/service-point-widget-content.twig';

    /**
     * Specification:
     * - Returns a list of shipment type keys that require service point selection.
     *
     * @api
     *
     * @return list<string>
     */
    public function getServicePointRequiredShipmentTypeKeys(): array
    {
        return [
            static::SHIPMENT_TYPE_ON_SITE_SERVICE,
        ];
    }

    /**
     * Specification:
     * - Returns the path to the service point widget content template.
     *
     * @api
     *
     * @return string
     */
    public function getServicePointWidgetContentTemplatePath(): string
    {
        return static::TEMPLATE_PATH_SERVICE_POINT_WIDGET_CONTENT;
    }

    /**
     * Specification:
     * - Returns the product service type name.
     *
     * @api
     *
     * @return string
     */
    public function getProductServiveTypeName(): string
    {
        return $this->getSharedConfig()->getProductServiveTypeName();
    }
}
