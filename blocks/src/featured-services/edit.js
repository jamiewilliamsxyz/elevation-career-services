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
              "Number of service cards to show",
              "elevation-career-services",
            )}
            value={count}
            onChange={(value) => setAttributes({ count: value })}
            min={1}
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
