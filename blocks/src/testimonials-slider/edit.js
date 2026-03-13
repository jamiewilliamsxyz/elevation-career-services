import { __ } from "@wordpress/i18n";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, RangeControl } from "@wordpress/components";

export default function Edit({ attributes, setAttributes }) {
  const { count } = attributes;

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Settings", "elevation-career-services")}>
          <RangeControl
            label={__(
              "Number of testimonials to show",
              "elevation-career-services",
            )}
            value={count}
            onChange={(value) => setAttributes({ count: value })}
            min={2}
            max={6}
          />
        </PanelBody>
      </InspectorControls>

      <div>
        <p {...useBlockProps()}>
          {__("Featured Services Block", "elevation-career-services")}
        </p>
      </div>
    </>
  );
}
