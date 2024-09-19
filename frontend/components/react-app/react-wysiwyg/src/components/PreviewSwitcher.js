import React, { useState } from 'react';
import PreviewHTML from './PreviewHTML';
import PreviewMarkdown from './PreviewMarkdown';

const PreviewSwitcher = ({ markdown }) => {
  const [format, setFormat] = useState('html');

  return (
    <div>
      <select value={format} onChange={(e) => setFormat(e.target.value)}>
        <option value="html">HTML</option>
        <option value="markdown">Markdown</option>
      </select>
      {format === 'html' ? <PreviewHTML markdown={markdown} /> : <PreviewMarkdown markdown={markdown} />}
    </div>
  );
};

export default PreviewSwitcher;