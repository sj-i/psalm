<?php
namespace Psalm;

use Psalm\Checker\FileChecker;

interface StatementsSource extends FileSource
{
    /**
     * @return null|string
     */
    public function getNamespace();

    /**
     * @return array<string, string>
     */
    public function getAliasedClassesFlipped();

    /**
     * @return string|null
     */
    public function getFQCLN();

    /**
     * @return string|null
     */
    public function getClassName();

    /**
     * @return FileChecker
     */
    public function getFileChecker();

    /**
     * @return string|null
     */
    public function getParentFQCLN();

    /**
     * @param string $file_path
     * @param string $file_name
     *
     * @return void
     */
    public function setRootFilePath($file_path, $file_name);

    /**
     * @param string $file_path
     *
     * @return bool
     */
    public function hasParentFilePath($file_path);

    /**
     * @param string $file_path
     *
     * @return bool
     */
    public function hasAlreadyRequiredFilePath($file_path);

    /**
     * @return int
     */
    public function getRequireNesting();

    /**
     * @return bool
     */
    public function isStatic();

    /**
     * @return StatementsSource|null
     */
    public function getSource();

    /**
     * Get a list of suppressed issues
     *
     * @return array<string>
     */
    public function getSuppressedIssues();

    /**
     * @param array<int, string> $new_issues
     *
     * @return void
     */
    public function addSuppressedIssues(array $new_issues);

    /**
     * @param array<int, string> $new_issues
     *
     * @return void
     */
    public function removeSuppressedIssues(array $new_issues);
}
