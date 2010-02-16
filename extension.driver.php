<?php

	Class extension_lang_russian extends Extension {

		/**
		 * Extension information
		 */

		public function about() {
			return array(
				'name' => 'Language: Russian',
				'type' => 'Localisation',
				'version' => '1.0.1',
				'release-date' => '2010-02-16',
				'author' => array(
					'name' => 'Igor Bogdanov / IBCICO Development (2WebCompany)',
					'website' => 'http://www.ibcico.com',
					'email' => 'i.bogdanov@ibcico.com'
				),
				'description' => 'Russian translation for the Symphony backend',
				'compatibility' => array(
					'2.0.0' => false,
					'2.0.1' => false,
					'2.0.2' => false,
					'2.0.3' => false,
					'2.0.4' => false,
					'2.0.5' => false,
					'2.0.6' => true,
					'2.0.7' => true
				)
			);
		}

	}