<?php
namespace Drupal\domynic_view\Plugin\views\area;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\area\AreaPluginBase;

/**
 * Defines a views area plugin.
 *
 * @ingroup views_area_handlers
 *
 * @ViewsArea("domynic_view_area")
 */
class DomynicViewArea extends AreaPluginBase
{

    protected function defineOptions()
    {
        $options = parent::defineOptions(); // TODO: Change the autogenerated stub
        $options['domynic_view_area'] = ['default' => ''];
        return $options;
    }

    public function buildOptionsForm(&$form, FormStateInterface $form_state)
    {
        $form['domynic_view_area'] = [
            '#type'          => 'textarea',
            '#title'         => t('Title Domynic View'),
            '#description'   => t('Description Domynic view'),
            '#default_value' => $this->options['domynic_view_area'],
            '#required'      => TRUE
        ];

        parent::buildOptionsForm($form, $form_state);
    }

    /**
     * Render the area.
     *
     * @param bool $empty
     *   (optional) Indicator if view result is empty or not. Defaults to FALSE.
     *
     * @return array
     *   In any case we need a valid Drupal render array to return.
     */
    public function render($empty = FALSE)
    {
        // TODO: Implement render() method.
        if (!$empty || !empty($this->options['empty'])) {
            $views = $this->options['domynic_view_area'];
            return [
                '#markup' => $views
            ];
        }
    }
}