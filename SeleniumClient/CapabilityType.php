<?php
// Copyright 2012-present Nearsoft, Inc

// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at

// http://www.apache.org/licenses/LICENSE-2.0

// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace SeleniumClient;

abstract class CapabilityType {	
	
	const BROWSER_NAME               = "browserName";
	const VERSION                    = "version";
	const PLATFORM                   = "platform";	
	const JAVASCRIPT_ENABLED         = "javascriptEnabled";
	const TAKES_SCREENSHOT           = "takesScreenshot";
	const HANDLES_ALERT              = "handlesAlerts";
	const DATABASE_ENABLED           = "databaseEnabled";
	const LOCATION_CONTEXT_ENABLED   = "locationContextEnabled";
	const APPLICATION_CACHE_ENABLED  = "applicationCacheEnabled";
	const BROWSER_CONNECTION_ENABLED = "browserConnectionEnabled";
	const CSS_SELECTORS_ENABLED      = "cssSelectorsEnabled";
	const WEB_STORAGE_ENABLED        = "webStorageEnabled";
	const ROTATABLE                  = "rotatable";
	const ACCEPT_SSL_CERTS           = "acceptSslCerts";
	const NATIVE_EVENTS              = "nativeEvents";
	const PROXY                      = "proxy";	
	
	public static function isValidCapabilityType($capabilityType)
	{
		$refl = new \ReflectionClass(__CLASS__);
		
		$validCapabilityType = false;
		
		foreach ($refl->getConstants() as $constantName => $constantValue)
		{
			if($constantValue ==  $capabilityType )
			{
				$validCapabilityType = true;
			}
		}
		
		return $validCapabilityType;
	}
		
}