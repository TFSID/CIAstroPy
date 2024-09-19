import React, {useState} from 'react';
import logo from './logo.svg';
import Editor from './components/Editor';
import Preview from './components/Preview';

import './App.css';

const App = () => {
  const [markdown, setMarkdown] = useState('');

  const handleEditorChange = (content, delta, source, editor) => {
    setMarkdown(editor.getHTML()); //set HTML content
  }
  return (
    <div className="App">
      <div className="App-content">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <p>
            Welcome To My WYSIWYG React App
            {/* <PreviewSwitcher markdown={markdown} /> */}
          </p>
          
        </header>
        <div className="WYSIWYG-application">
          <Editor value={markdown} onChange={handleEditorChange} />
          <Preview markdown={markdown} />
        </div>
        
      </div>
      
    </div>
  );
}

export default App;
