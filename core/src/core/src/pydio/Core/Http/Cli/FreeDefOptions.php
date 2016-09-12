<?php
/*
 * Copyright 2007-2015 Abstrium <contact (at) pydio.com>
 * This file is part of Pydio.
 *
 * Pydio is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pydio is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://pyd.io/>.
 */
namespace Pydio\Core\Http\Cli;

defined('AJXP_EXEC') or die('Access not allowed');

use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class FreeDefOptions
 * @package Pydio\Core\Http\Cli
 */
class FreeDefOptions extends InputDefinition
{
    /**
     * @param string $optionName
     * @return bool
     */
    public function hasOption($optionName){
        return true;
    }

    /**
     * @param string $optionName
     * @return InputOption
     */
    public function getOption($optionName){
        if(!parent::hasOption($optionName)){
            return new InputOption($optionName, null, InputOption::VALUE_OPTIONAL);
        }else{
            return parent::getOption($optionName);
        }
    }
}