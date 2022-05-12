<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$entries = [
			[
				'parent_id'            => null,
				'type'                 => 'terms',
				'name'                 => ['en' => 'Terms'],
				'slug'                 => 'terms',
				'title'                => ['en' => 'Terms & Conditions'],
				'picture'              => null,
				'content'              => ['en' => '<h4><b>Definitions</b></h4><p>Each of the terms mentioned below have in these Conditions of Sale JobClass Service (hereinafter the "Conditions") the following meanings:</p><ol><li>Announcement&nbsp;: refers to all the elements and data (visual, textual, sound, photographs, drawings), presented by an Advertiser editorial under his sole responsibility, in order to buy, rent or sell a product or service and broadcast on the Website and Mobile Site.</li><li>Advertiser&nbsp;: means any natural or legal person, a major, established in France, holds an account and having submitted an announcement, from it, on the Website. Any Advertiser must be connected to the Personal Account for deposit and or manage its ads. Ad first deposit automatically entails the establishment of a Personal Account to the Advertiser.</li><li>Personal Account&nbsp;: refers to the free space than any Advertiser must create and which it should connect from the Website to disseminate, manage and view its ads.</li><li>JobClass&nbsp;: means the company that publishes and operates the Website and Mobile Site {YourCompany}, registered at the Trade and Companies Register of {YourCity} under the number {YourCompany Registration Number} whose registered office is at {YourCompany Address}.</li><li>Customer Service&nbsp;: JobClass means the department to which the Advertiser may obtain further information. This service can be contacted via email by clicking the link on the Website and Mobile Site.</li><li>JobClass Service&nbsp;: JobClass means the services made available to Users and Advertisers on the Website and Mobile Site.</li><li>Website&nbsp;: means the website operated by JobClass accessed mainly from the URL <a href="https://bedigit.com">https://bedigit.com</a> and allowing Users and Advertisers to access the Service via internet JobClass.</li><li>Mobile Site&nbsp;: is the mobile site operated by JobClass accessible from the URL <a href="https://bedigit.com">https://bedigit.com</a> and allowing Users and Advertisers to access via their mobile phone service {YourSiteName}.</li><li>User&nbsp;: any visitor with access to JobClass Service via the Website and Mobile Site and Consultant Service JobClass accessible from different media.</li></ol><h4><b>Subject</b></h4><p>These Terms and Conditions Of Use establish the contractual conditions applicable to any subscription by an Advertiser connected to its Personal Account from the Website and Mobile Site.<br></p><h4><b>Acceptance</b></h4><p>Any use of the website by an Advertiser is full acceptance of the current Terms.<br></p><h4><b>Responsibility</b></h4><p>Responsibility for JobClass can not be held liable for non-performance or improper performance of due control, either because of the Advertiser, or a case of major force.<br></p><h4><b>Modification of these terms</b></h4><p>JobClass reserves the right, at any time, to modify all or part of the Terms and Conditions.</p><p>Advertisers are advised to consult the Terms to be aware of the changes.</p><h4><b>Miscellaneous</b></h4><p>If part of the Terms should be illegal, invalid or unenforceable for any reason whatsoever, the provisions in question would be deemed unwritten, without questioning the validity of the remaining provisions will continue to apply between Advertisers and JobClass.</p><p>Any complaints should be addressed to Customer Service JobClass.</p>'],
				'external_link'        => null,
				'lft'                  => '6',
				'rgt'                  => '7',
				'depth'                => '1',
				'name_color'           => null,
				'title_color'          => null,
				'target_blank'         => '0',
				'excluded_from_footer' => '0',
				'active'               => '1',
				'created_at'           => now()->format('Y-m-d H:i:s'),
				'updated_at'           => now()->format('Y-m-d H:i:s'),
			],
			[
				'parent_id'            => null,
				'type'                 => 'privacy',
				'name'                 => ['en' => 'Privacy'],
				'slug'                 => 'privacy',
				'title'                => ['en' => 'Privacy'],
				'picture'              => null,
				'content'              => ['en' => '<p>Your privacy is an important part of our relationship with you. Protecting your privacy is only part of our mission to provide a secure web environment. When using our site, including our services, your information will remain strictly confidential. Contributions made on our blog or on our forum are open to public view; so please do not post any personal information in your dealings with others. We accept no liability for those actions because it is your sole responsibility to adequate and safe post content on our site. We will not share, rent or share your information with third parties.</p><p>When you visit our site, we collect technical information about your computer and how you access our website and analyze this information such as Internet Protocol (IP) address of your computer, the operating system used by your computer, the browser (eg, Chrome, Firefox, Internet Explorer or other) your computer uses, the name of your Internet service provider (ISP), the Uniform Resource Locator (URL) of the website from which you come and the URL to which you go next and certain operating metrics such as the number of times you use our website. This general information can be used to help us better understand how our site is viewed and used. We may share this general information about our site with our business partners or the general public. For example, we may share the information on the number of daily unique visitors to our site with potential corporate partners or use them for advertising purposes. This information does contain any of your personal data that can be used to contact you or identify you.</p><p>When we place links or banners to other sites of our website, please note that we do not control this kind of content or practices or privacy policies of those sites. We do not endorse or assume no responsibility for the privacy policies or information collection practices of any other website other than managed sites JobClass.</p><p>We use the highest security standard available to protect your identifiable information in transit to us. All data stored on our servers are protected by a secure firewall for the unauthorized use or activity can not take place. Although we make every effort to protect your personal information against loss, misuse or alteration by third parties, you should be aware that there is always a risk that low-intentioned manage to find a way to thwart our security system or that Internet transmissions could be intercepted.</p><p>We reserve the right, without notice, to change, modify, add or remove portions of our Privacy Policy at any time and from time to time. These changes will be posted publicly on our website. When you visit our website, you accept all the terms of our privacy policy. Your continued use of this website constitutes your continued agreement to these terms. If you do not agree with the terms of our privacy policy, you should cease using our website.</p>'],
				'external_link'        => null,
				'lft'                  => '8',
				'rgt'                  => '9',
				'depth'                => '1',
				'name_color'           => null,
				'title_color'          => null,
				'target_blank'         => '0',
				'excluded_from_footer' => '0',
				'active'               => '1',
				'created_at'           => now()->format('Y-m-d H:i:s'),
				'updated_at'           => now()->format('Y-m-d H:i:s'),
			],
			[
				'parent_id'            => null,
				'type'                 => 'standard',
				'name'                 => ['en' => 'Anti-Scam'],
				'slug'                 => 'anti-scam',
				'title'                => ['en' => 'Anti-Scam'],
				'picture'              => null,
				'content'              => ['en' => '<p><b>Protect yourself against Internet fraud!</b></p><p>The vast majority of ads are posted by honest people and trust. So you can do excellent business. Despite this, it is important to follow a few common sense rules following to prevent any attempt to scam.</p><p><b>Our advices</b></p><ul><li>Doing business with people you can meet in person.</li><li>Never send money by Western Union, MoneyGram or other anonymous payment systems.</li><li>Never send money or products abroad.</li><li>Do not accept checks.</li><li>Ask about the person you\'re dealing with another confirming source name, address and telephone number.</li><li>Keep copies of all correspondence (emails, ads, letters, etc.) and details of the person.</li><li>If a deal seems too good to be true, there is every chance that this is the case. Refrain.</li></ul><p><b>Recognize attempted scam</b></p><ul><li>The majority of scams have one or more of these characteristics:</li><li>The person is abroad or traveling abroad.</li><li>The person refuses to meet you in person.</li><li>Payment is made through Western Union, Money Gram or check.</li><li>The messages are in broken language (English or French or ...).</li><li>The texts seem to be copied and pasted.</li><li>The deal seems to be too good to be true.</li></ul>'],
				'external_link'        => null,
				'lft'                  => '4',
				'rgt'                  => '5',
				'depth'                => '1',
				'name_color'           => null,
				'title_color'          => null,
				'target_blank'         => '0',
				'excluded_from_footer' => '0',
				'active'               => '1',
				'created_at'           => now()->format('Y-m-d H:i:s'),
				'updated_at'           => now()->format('Y-m-d H:i:s'),
			],
			[
				'parent_id'            => null,
				'type'                 => 'standard',
				'name'                 => ['en' => 'FAQ'],
				'slug'                 => 'faq',
				'title'                => ['en' => 'Frequently Asked Questions'],
				'picture'              => null,
				'content'              => ['en' => '<p><b>How do I place an ad?</b></p><p>It\'s very easy to place an ad: click on the button "Post free Ads" above right.</p><p><b>What does it cost to advertise?</b></p><p>The publication is 100% free throughout the website.</p><p><b>If I post an ad, will I also get more spam e-mails?</b></p><p>Absolutely not because your email address is not visible on the website.</p><p><b>How long will my ad remain on the website?</b></p><p>In general, an ad is automatically deactivated from the website after 3 months. You will receive an email a week before D-Day and another on the day of deactivation. You have the ability to put them online in the following month by logging into your account on the site. After this delay, your ad will be automatically removed permanently from the website.</p><p><b>I sold my item. How do I delete my ad?</b></p><p>Once your product is sold or leased, log in to your account to remove your ad.</p>'],
				'external_link'        => null,
				'lft'                  => '2',
				'rgt'                  => '3',
				'depth'                => '1',
				'name_color'           => null,
				'title_color'          => null,
				'target_blank'         => '0',
				'excluded_from_footer' => '0',
				'active'               => '1',
				'created_at'           => now()->format('Y-m-d H:i:s'),
				'updated_at'           => now()->format('Y-m-d H:i:s'),
			],
		];
		
		$tableName = (new Page())->getTable();
		foreach ($entries as $entry) {
			$entry = arrayTranslationsToJson($entry);
			$entryId = DB::table($tableName)->insertGetId($entry);
		}
	}
}
