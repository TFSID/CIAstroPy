import React from 'react';

const PreviewMarkdown = ({ markdown }) => {
  return (
    <pre className="markdown-preview">
      {markdown}
    </pre>
  );
};

export default PreviewMarkdown;