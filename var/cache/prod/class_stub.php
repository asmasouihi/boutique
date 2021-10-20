<?php

class Combination extends CombinationCore {};
class Product extends ProductCore {};
class QuickAccess extends QuickAccessCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CartChecksum extends CartChecksumCore {};
class AddressValidator extends AddressValidatorCore {};
class CheckoutSession extends CheckoutSessionCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutProcess extends CheckoutProcessCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class Validate extends ValidateCore {};
class ProductSupplier extends ProductSupplierCore {};
class Tools extends ToolsCore {};
class Connection extends ConnectionCore {};
class Pack extends PackCore {};
class Language extends LanguageCore {};
class CustomizationField extends CustomizationFieldCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class DbPDO extends DbPDOCore {};
class DbQuery extends DbQueryCore {};
abstract class Db extends DbCore {};
class DbMySQLi extends DbMySQLiCore {};
class Windows extends WindowsCore {};
class Translate extends TranslateCore {};
class AttributeGroup extends AttributeGroupCore {};
class Contact extends ContactCore {};
class FeatureLang extends FeatureLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class CategoryLang extends CategoryLangCore {};
class GenderLang extends GenderLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class ProfileLang extends ProfileLangCore {};
class AttributeLang extends AttributeLangCore {};
class ContactLang extends ContactLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class DataLang extends DataLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class GroupLang extends GroupLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class MetaLang extends MetaLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class TabLang extends TabLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class RiskLang extends RiskLangCore {};
class CarrierLang extends CarrierLangCore {};
class ThemeLang extends ThemeLangCore {};
class Attribute extends AttributeCore {};
class Guest extends GuestCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class Message extends MessageCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class SupplierAddress extends SupplierAddressCore {};
class Carrier extends CarrierCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class Search extends SearchCore {};
class Meta extends MetaCore {};
class PhpEncryption extends PhpEncryptionCore {};
class Configuration extends ConfigurationCore {};
class ProductAssembler extends ProductAssemblerCore {};
class Access extends AccessCore {};
class FileUploader extends FileUploaderCore {};
class Group extends GroupCore {};
class CMSCategory extends CMSCategoryCore {};
class EmployeeSession extends EmployeeSessionCore {};
class Upgrader extends UpgraderCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
abstract class ObjectModel extends ObjectModelCore {};
class ImageType extends ImageTypeCore {};
class CustomerThread extends CustomerThreadCore {};
class OrderSlip extends OrderSlipCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderMessage extends OrderMessageCore {};
class OrderHistory extends OrderHistoryCore {};
class Order extends OrderCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderState extends OrderStateCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderDetail extends OrderDetailCore {};
class OrderReturn extends OrderReturnCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class Feature extends FeatureCore {};
class Cookie extends CookieCore {};
class Delivery extends DeliveryCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class Page extends PageCore {};
class RequestSql extends RequestSqlCore {};
class Mail extends MailCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class CSV extends CSVCore {};
class CccReducer extends CccReducerCore {};
class CssMinifier extends CssMinifierCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class JsMinifier extends JsMinifierCore {};
class TreeToolbar extends TreeToolbarCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class Tree extends TreeCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class Notification extends NotificationCore {};
class Image extends ImageCore {};
class Uploader extends UploaderCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class CustomerAddress extends CustomerAddressCore {};
class Tab extends TabCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperKpi extends HelperKpiCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperView extends HelperViewCore {};
class HelperShop extends HelperShopCore {};
class Helper extends HelperCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperList extends HelperListCore {};
class HelperForm extends HelperFormCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperCalendar extends HelperCalendarCore {};
class ProductDownload extends ProductDownloadCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceKey extends WebserviceKeyCore {};
class CustomerSession extends CustomerSessionCore {};
class Employee extends EmployeeCore {};
class Currency extends CurrencyCore {};
class RangeWeight extends RangeWeightCore {};
class RangePrice extends RangePriceCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Customization extends CustomizationCore {};
class Risk extends RiskCore {};
class CMS extends CMSCore {};
class Gender extends GenderCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class Controller extends ControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class Manufacturer extends ManufacturerCore {};
class Tag extends TagCore {};
class Link extends LinkCore {};
class DateRange extends DateRangeCore {};
class SpecificPrice extends SpecificPriceCore {};
class CMSRole extends CMSRoleCore {};
class Store extends StoreCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Profile extends ProfileCore {};
class Media extends MediaCore {};
class Zone extends ZoneCore {};
class LocalizationPack extends LocalizationPackCore {};
class Dispatcher extends DispatcherCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class Category extends CategoryCore {};
class AddressFormat extends AddressFormatCore {};
class Address extends AddressCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class CustomerMessage extends CustomerMessageCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class GroupReduction extends GroupReductionCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class ShopGroup extends ShopGroupCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class StockMvt extends StockMvtCore {};
class StockMvtWS extends StockMvtWSCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class SupplyOrder extends SupplyOrderCore {};
class Warehouse extends WarehouseCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class StockManager extends StockManagerCore {};
class StockAvailable extends StockAvailableCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class StockMvtReason extends StockMvtReasonCore {};
class Stock extends StockCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class FormField extends FormFieldCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerPersister extends CustomerPersisterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class FeatureValue extends FeatureValueCore {};
class Curve extends CurveCore {};
class ProductSale extends ProductSaleCore {};
class Referrer extends ReferrerCore {};
class Attachment extends AttachmentCore {};
class Context extends ContextCore {};
class SearchEngine extends SearchEngineCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Cart extends CartCore {};
class Hook extends HookCore {};
class Customer extends CustomerCore {};
class Supplier extends SupplierCore {};
class Alias extends AliasCore {};
class State extends StateCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class CartRule extends CartRuleCore {};
class ImageManager extends ImageManagerCore {};
class LinkProxy extends LinkProxyCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheMemcache extends CacheMemcacheCore {};
abstract class Cache extends CacheCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheApc extends CacheApcCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRule extends TaxRuleCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class Tax extends TaxCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class PDF extends PDFCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class Country extends CountryCore {};
class AddressChecksum extends AddressChecksumCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class Module extends ModuleCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
class Chart extends ChartCore {};
class ConfigurationTest extends ConfigurationTestCore {};