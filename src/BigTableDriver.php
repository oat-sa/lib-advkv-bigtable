<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2019 (original work) Open Assessment Technologies SA (under the project TAO-PRODUCT);
 *
 * @author Joel Bout<joel@taotesting.com>
 * @license GPLv2
 * @package generis
 */
namespace oat\advkv\bigtable;

use Google\Cloud\Bigtable\BigtableClient;

/**
 * BigTable keyvalue driver
 */
class BigTableDriver implements \common_persistence_KvDriver{

    /**
     * @var BigtableClient
     */
    private $client;

    public function connect($id, array $params)
    {
        $this->client = new BigtableClient($params['connection']);
        return new \common_persistence_KeyValuePersistence($params, $this);
    }

    public function set($id, $value, $ttl = null, $nx = false)
    {}

    public function get($id)
    {}

    public function exists($id)
    {}

    public function del($id)
    {}

}