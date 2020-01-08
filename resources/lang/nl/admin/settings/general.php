<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domein',
    'ad_domain_help'			=> 'Dit is soms hetzelfde als je e-mail domein.',
    'admin_cc_email'            => 'CC e-mail',
    'admin_cc_email_help'       => 'Als u een kopie van de uitgifte/inname e-mail die aan de gebruikers worden verzonden wilt verzenden naar een extra e-mailaccount, vul dan hier het e-mailadres in. Laat anders dit veld leeg.',
    'is_ad'				        => 'Dit is een Active Directory server',
	'alert_email'				=> 'Verstuur meldingen naar',
	'alerts_enabled'			=> 'Meldingen ingeschakeld',
	'alert_interval'			=> 'Drempel verlopende meldingen (in dagen)',
	'alert_inv_threshold'		=> 'Inventaris melding drempel',
	'asset_ids'					=> 'Product ID\'s',
	'audit_interval'            => 'Controle-Interval',
    'audit_interval_help'       => 'Vul hier de interval in als je op periodieke basis activa moet controleren.',
	'audit_warning_days'        => 'Audit waarschuwingsdrempel',
    'audit_warning_days_help'   => 'Hoeveel dagen vooraf moeten we je waarschuwen als activa gecontroleerd moet gaan worden?',
	'auto_increment_assets'		=> 'Genereer een auto-verhoging product ID\'s',
	'auto_increment_prefix'		=> 'Voorvoegsel (niet verplicht)',
	'auto_incrementing_help'    => 'Schakel eerst auto-verhoging voor product ID\'s in',
	'backups'					=> 'Back-ups',
	'barcode_settings'			=> 'Barcode instellingen',
    'confirm_purge'			    => 'Opschoning bevestigen',
    'confirm_purge_help'		=> 'Voer de tekst "DELETE" in het vak hieronder om uw verwijderde records op te schonen. Deze actie kan niet ongedaan worden gemaakt.',
	'custom_css'				=> 'Aangepaste CSS',
	'custom_css_help'			=> 'Voer een aangepaste CSS overschrijving die je wilt gebruiken in. Gebruik geen &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Aangepaste Paswoord reset URL',
    'custom_forgot_pass_url_help'	=> 'Dit vervangt de ingebouwde "vergeten paswoord URL" op de inlogpagina, handig om gebruikers te verwijzen naar een interne of gehoste LDAP paswoord reset functionaliteit. Deze optie inschakelen zal effectief de functionaliteit "vergeten paswoord" voor een lokale gebruiker uitschakelen.',
    'dashboard_message'			=> 'Dashboard-bericht',
    'dashboard_message_help'	=> 'Deze tekst verschijnt op het dashboard voor iedereen met toestemming om het dashboard te bekijken.',
	'default_currency'  		=> 'Standaard valuta',
	'default_eula_text'			=> 'Standaard gebruikersovereenkomst',
  'default_language'			=> 'Standaardtaal',
	'default_eula_help_text'	=> 'Je kan aangepaste gebruikersovereenkomsten koppelen aan specifieke product categorieën.',
    'display_asset_name'        => 'Laat Product naam zien',
    'display_checkout_date'     => 'Laat Checkout datum zien',
    'display_eol'               => 'Laat EOL in tabel zien',
    'display_qr'                => 'QR codes weergeven',
	'display_alt_barcode'		=> 'Streepjescode weergeven',
	'barcode_type'				=> 'QR-code soort',
	'alt_barcode_type'			=> 'Streepjescode soort',
    'eula_settings'				=> 'Gebruikersovereenkomsten instellingen',
    'eula_markdown'				=> 'Deze gebruikersovereenkomst staat <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a> toe.',
    'footer_text'               => 'Aanvullende voettekst ',
    'footer_text_help'          => 'Deze tekst verschijnt in de voettekst aan de rechterkant. Links zijn toegestaan ​​met gebruik van <a href="https://help.github.com/articles/github-flavored-markdown/">Github-stijlen</a>. Regeleindes, koppen, afbeeldingen, enzovoort kunnen resulteren in onvoorspelbare resultaten.',
    'general_settings'			=> 'Algemene Instellingen',
	'generate_backup'			=> 'Genereer een backup',
    'header_color'              => 'Kleur van koptekst',
    'info'                      => 'Deze instellingen laten jou specifieke aspecten aanpassen van jou installatie.',
    'laravel'                   => 'Laravel Versie',
    'ldap_enabled'              => 'LDAP ingeschakeld',
    'ldap_integration'          => 'LDAP integratie',
    'ldap_settings'             => 'LDAP instellingen',
    'ldap_login_test_help'      => 'Voer een geldig LDAP gebruikersnaam en paswoord in van de base DN die u hierboven heeft bepaald. Dit om te testen of uw LDAP login correct is geconfigureerd. U MOET EERST UW BIJGEWERKTE LDAP INSTELLINGEN OPSLAAN.',
    'ldap_login_sync_help'      => 'Dit test enkel of LDAP correct kan synchroniseren. Als uw LDAP authenticatie vraag niet correct is, dan is het mogelijk dat gebruikers niet kunnen inloggen. U MOET EERST UW BIJGEWERKTE LDAP INSTELLINGEN OPSLAAN.',
    'ldap_server'               => 'LDAP server',
    'ldap_server_help'          => 'Dit moet beginnen met ldap:// (voor onversleuteld of TLS) of ldaps:// (voor SSL)',
	'ldap_server_cert'			=> 'LDAP SSL certificaat validatie',
	'ldap_server_cert_ignore'	=> 'Staat ongeldige SSL certificaat toe',
	'ldap_server_cert_help'		=> 'Selecteer deze box als je een eigen ondergetekende SSL certificaat gebruik en deze wilt accepteren.',
    'ldap_tls'                  => 'TLS gebruiken',
    'ldap_tls_help'             => 'Dit moet alleen ingeschakeld worden als je STARTTLS op je LDAP server gebruikt. ',
    'ldap_uname'                => 'LDAP Bind gebruikersnaam',
    'ldap_pword'                => 'LDAP Bind wachtwoord',
    'ldap_basedn'               => 'Basis Bind DN',
    'ldap_filter'               => 'LDAP filter',
    'ldap_pw_sync'              => 'LDAP wachtwoord synchronisatie',
    'ldap_pw_sync_help'         => 'Schakel dit vinkje uit als je niet wenst dat LDAP wachtwoorden gesynchroniseerd worden met lokale wachtwoorden. Uitschakelen kan betekenen dat gebruikers niet kunnen inloggen als de LDAP server niet bereikbaar is.',
    'ldap_username_field'       => 'Gebruikersnaam veld',
    'ldap_lname_field'          => 'Achternaam',
    'ldap_fname_field'          => 'LDAP Voornaam',
    'ldap_auth_filter_query'    => 'LDAP verficatie query',
    'ldap_version'              => 'LDAP versie',
    'ldap_active_flag'          => 'LDAP actief vlag',
    'ldap_emp_num'              => 'LDAP personeelsnummer',
    'ldap_email'                => 'LDAP E-mail',
    'license'                  => 'Softwarelicentie',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'Deze Snipe-IT installatie kan scripts van de buitenwereld laden.',
    'login_note'                => 'Inlog notitie',
    'login_note_help'           => 'Hier kan je optioneel een paar regels tekst weergeven, bijvoorbeeld om mensen die een verloren of gestolen apparaat hebben gevonden te assisteren. Dit veld accepteert <a href="https://help.github.com/articles/github-flavored-markdown/">Github markdown opmaak</a>',
    'login_remote_user_text'    => 'Opties voor externe gebruikers',
    'login_remote_user_enabled_text' => 'Inloggen met header voor externe gebruiker inschakelen',
    'login_remote_user_enabled_help' => 'Met deze optie wordt verificatie via de REMOTE_USER-header ingeschakeld volgens de "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Schakel andere authenticatiemechanismen uit',
    'login_common_disabled_help' => 'Met deze optie worden andere authenticatiemechanismen uitgeschakeld. Schakel deze optie alleen in als u zeker weet dat uw REMOTE_USER-login al werkt',
    'login_remote_user_custom_logout_url_text' => 'Aangepaste link voor uitloggen',
    'login_remote_user_custom_logout_url_help' => 'Als hier een URL wordt opgegeven, worden gebruikers doorgestuurd naar deze URL nadat de gebruiker zich heeft afgemeld bij Snipe-IT. Dit is handig om de gebruikerssessies van uw authenticatieprovider correct te sluiten.',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Beperk gebruikers (ook admins) die gekoppeld zijn aan hun bedrijf tot hun bedrijfsproducten.',
    'full_multiple_companies_support_text' => 'Volledige meerdere bedrijven ondersteuning',
    'show_in_model_list'   => 'Toon in het dropdownmenu van modellen',
    'optional'					=> 'mogelijk',
    'per_page'                  => 'Resultaten per pagina',
    'php'                       => 'PHP versie',
    'php_gd_info'               => 'Je moet php-gd installeren om QR codes te laten zien, zie installatie instructies.',
    'php_gd_warning'            => 'PHP Image Processing en GD plugin zijn NIET geïnstalleerd.',
    'pwd_secure_complexity'     => 'Wachtwoord complexiteit',
    'pwd_secure_complexity_help' => 'Selecteer wat voor wachtwoord complexiteit je toe wil passen.',
    'pwd_secure_min'            => 'Minimum lengte wachtwoord',
    'pwd_secure_min_help'       => 'Minimaal toegestane waarde is 5',
    'pwd_secure_uncommon'       => 'Algemeen bekende wachtwoorden tegengaan',
    'pwd_secure_uncommon_help'  => 'Dit zal tegengaan dat gebruikers wachtwoorden gebruiken die in de top 10.000 meest uitgelekte wachtwoorden voorkomt.',
    'qr_help'                   => 'Schakel QR codes eerst in om dit in te kunnen stellen',
    'qr_text'                   => 'QR Code tekst',
    'setting'                   => 'Instelling',
    'settings'                  => 'Instellingen',
    'show_alerts_in_menu'       => 'Waarschuwingen weergeven in hoofdmenu',
    'show_archived_in_list'     => 'Gearchiveerde items',
    'show_archived_in_list_text'     => 'Toon gearchiveerde items in de lijst "alle items"',
    'show_images_in_email'     => 'Afbeeldingen weergeven in e-mails',
    'show_images_in_email_help'   => 'Schakel dit selectievakje uit als uw Snipe-IT-installatie zich achter een VPN of gesloten netwerk bevindt en gebruikers buiten het netwerk geen afbeeldingen vanuit Snipe-IT in hun e-mails kunnen laten zien.',
    'site_name'                 => 'Site naam',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack kanaal',
    'slack_endpoint'            => 'Slack eindpunt',
    'slack_integration'         => 'Slack instellingen',
    'slack_integration_help'    => 'Slack intergratie is niet verplicht, maar de endpoint en kanaal zijn verplicht als je het wilt gebruiken. Om Slack integratie te configureren moet je eerst <a href=":slack_link" target="_new">maak een nieuwe webhook aan</a> in je Slack account.',
    'slack_integration_help_button'    => 'Nadat u uw Slack-informatie hebt opgeslagen, verschijnt een testknop.',
    'slack_test_help'           => 'Test of uw Slack-integratie correct is geconfigureerd. JE MOET EERST JE GEUPDATETE SLACK-INSTELLINGEN OPSLAAN.',
    'snipe_version'  			=> 'Snipe-IT Versie',
    'support_footer'            => 'Ondersteuningsvoettekst links ',
    'support_footer_help'       => 'Geef aan wie de links naar de Snipe-IT-ondersteuningsinformatie en gebruikershandleiding ziet',
    'version_footer'            => 'Versie in voettekst ',
    'version_footer_help'       => 'Geef aan wie de Snipe-IT-versie en het buildnummer ziet.',
    'system'                    => 'Systeem informatie',
    'update'                    => 'Wijzig instelingen',
    'value'                     => 'Waarde',
    'brand'                     => 'Merk',
    'about_settings_title'      => 'Over instellingen',
    'about_settings_text'       => 'Deze instellingen laten jou specifieke aspecten aanpassen van jou installatie.',
    'labels_per_page'           => 'Labels per pagina',
    'label_dimensions'          => 'Label afmetingen (inches)',
    'next_auto_tag_base'        => 'Volgende automatische ophoging',
    'page_padding'              => 'Pagina marges (inches)',
    'privacy_policy_link'       => 'Link naar het privacybeleid',
    'privacy_policy'            => 'Privacybeleid',
    'privacy_policy_link_help'  => 'Als hier een url is opgenomen, wordt een link naar uw privacybeleid opgenomen in de app-voettekst en in alle e-mails die het systeem verzendt, in overeenstemming met GDPR. ',
    'purge'                     => 'Verwijderde items opschonen',
    'labels_display_bgutter'    => 'Label ondermarge',
    'labels_display_sgutter'    => 'Label zijmarge',
    'labels_fontsize'           => 'Label lettergrootte',
    'labels_pagewidth'          => 'Label blad breedte',
    'labels_pageheight'         => 'Label blad hoogte',
    'label_gutters'        => 'Label tussenruimte (inches)',
    'page_dimensions'        => 'Pagina dimensies (inches)',
    'label_fields'          => 'Zichtbare velden op label',
    'inches'        => 'inches',
    'width_w'        => 'b',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link naar Snipe-IT in e-mails',
    'show_url_in_emails_help_text'      => 'Schakel dit selectievakje uit als u niet wilt koppelen aan uw Snipe-IT-installatie in uw e-mailberichten. Nuttig als de meeste gebruikers nooit inloggen.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maximale miniatuur hoogte',
    'thumbnail_max_h_help'   => 'Maximale hoogte die miniatuur afbeeldingen mogen hebben in de lijstweergave. Minimaal 25, maximaal 500.',
    'two_factor'        => 'Twee factor authenticatie',
    'two_factor_secret'        => 'Twee factor code',
    'two_factor_enrollment'        => 'Twee factor uitrol',
    'two_factor_enabled_text'        => 'Twee factor inschakelen',
    'two_factor_reset'        => 'Twee factor geheim herstellen',
    'two_factor_reset_help'        => 'Dit zal de gebruiker dwingen om zijn apparaat opnieuw met Google Authenticator te activeren. Dit kan handig zijn als het huidig geactiveerde apparaat gestolen of verloren is. ',
    'two_factor_reset_success'          => 'Twee factor apparaat succesvol opnieuw ingesteld',
    'two_factor_reset_error'          => 'Twee factor apparaat opnieuw instellen mislukt',
    'two_factor_enabled_warning'        => 'Het inschakelen van twee factor authenticatie zal direct vereisen dat je authenticeert met een Google Auth geactiveerd apparaat. Je krijgt de mogelijkheid om een apparaat te activeren als dat nog niet het geval is.',
    'two_factor_enabled_help'        => 'Dit zal twee factor authenticatie via Google Authenticator inschakelen.',
    'two_factor_optional'        => 'Selectief (Gebruikers kunnen in- of uitschakelen wanneer toegestaan)',
    'two_factor_required'        => 'Vereist voor alle gebruikers',
    'two_factor_disabled'        => 'Uitgeschakeld',
    'two_factor_enter_code'	=> 'Voer twee factor code in',
    'two_factor_config_complete'	=> 'Code verzenden',
    'two_factor_enabled_edit_not_allowed' => 'De beheerder staat niet toe dat deze instelling aangepast wordt.',
    'two_factor_enrollment_text'	=> "Twee factor authenticatie is vereist, echter is je apparaat nog niet geactiveerd. Open je Google Authenticator app en scan de onderstaande QR code om je apparaat te activeren. Vul wanneer je het apparaat succesvol hebt geactiveerd hieronder de code in",
    'require_accept_signature'      => 'Handtekening vereisen',
    'require_accept_signature_help_text'      => 'Wanneer deze optie ingeschakeld wordt zal het fysiek accepteren van materiaal vereist worden.',
    'left'        => 'links',
    'right'        => 'rechts',
    'top'        => 'bovenkant',
    'bottom'        => 'onderkant',
    'vertical'        => 'verticaal',
    'horizontal'        => 'horizontaal',
    'unique_serial'                => 'Unieke serienummers',
    'unique_serial_help_text'                => 'Als u dit selectievakje inschakelt, worden unieke serienummers van materialen ingeschakeld',
    'zerofill_count'        => 'Lengte van object ID, inclusief opvulling',
);
